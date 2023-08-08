<?php

namespace App\Http\Controllers\Admin;

use App\Models\imagecategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\storage;

class imagecategoryController extends Controller
{
    public function index()
    {
        $imagecategory = imagecategory::all();
        return view('admin.imagecategory.imagecategory', compact('imagecategory'));
    }

    public function view($id)
    {
        $imagecategory = imagecategory::find($id);
        return view('admin.imagecategory.view', compact('imagecategory'));
    }

    public function add()
    {
        return view('admin.imagecategory.add');
    }

    public function insert(Request $request)
    {
        imagecategory::where('tile', $request->input('tile'))->update(['tile' => NULL]);

        $imagecategory = new imagecategory();
        if($request->hasFile('image'))
        {
                $image = $request->file('image');
                $filename = time().'.'.$image->extension();

                $destinationPath = public_path('assets/uploads/imagecategory/');
                $image->move($destinationPath, $filename);
                $imagecategory->image = $filename;
        }

        $imagecategory->img_name = $request->input('img_name');
        $imagecategory->description = $request->input('description');
        $imagecategory->tile = $request->input('tile');
        $imagecategory->save();
        return redirect('imagecategory')->with('status',"Image Category Added Successfully");
    }

    public function edit($id)
    {
        $imagecategory = imagecategory::find($id);
        return view('admin.imagecategory.edit', compact('imagecategory'));
    }

    public function update(Request $request, $id)
    {
        imagecategory::where('tile', $request->input('tile'))->update(['tile' => NULL]);
        $imagecategory = imagecategory::find($id);

        $imagecategory->img_name = $request->input('img_name');
        $imagecategory->description = $request->input('description');
        $imagecategory->tile = $request->input('tile');
        $imagecategory->update();
        return redirect('imagecategory')->with('status',"Image Category Updated Successfully");
    }

    public function destroy($id)
    {
        $imagecategory = imagecategory::find($id);
        if($imagecategory->image)
        {
            $path1 = 'assets/uploads/imagecategory/'.$imagecategory->image;
            if(File::exists($path1))
            {
                File::delete($path1);
            }
        }
        $imagecategory->delete();
        return redirect('imagecategory')->with('status',"Image Category Deleted Successfuly");
    }
}
