<?php

namespace App\Http\Controllers\Admin;

use App\Models\packages;
use App\Models\tourtype;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\storage;

class packageController extends Controller
{
    public function index()
    {
        $packages = packages::join('tourtype', 'tourtype.id', '=', 'packages.tourtype')
                                ->select('packages.*', 'tourtype.name')
                                ->get();

        return view('admin.packages.packages', compact('packages'));
    }

    public function view($id)
    {
        $packages = packages::join('tourtype', 'tourtype.id', '=', 'packages.tourtype')
                                ->select('packages.*', 'tourtype.name')
                                ->find($id);

        return view('admin.packages.view', compact('packages'));
    }

    public function add()
    {
        $tourtype = tourtype::all();
        return view('admin.packages.add', compact('tourtype'));
    }

    public function insert(Request $request)
    {
        $packages = new packages();
        if($request->hasFile('image'))
        {
                $image = $request->file('image');
                $filename = time().'.'.$image->extension();

                $destinationPath = public_path('assets/uploads/package/370/');
                $img = Image::make($image->path());
                $img->resize(370, 250, function ($constraint) {
                    // $constraint->aspectRatio();
                })->save($destinationPath.'/'.$filename);

                $destinationPath = public_path('assets/uploads/package/');
                $image->move($destinationPath, $filename);
                $packages->image = $filename;
        }

        $packages->packname = $request->input('packname');
        $packages->description = $request->input('description');
        $packages->tourtype = $request->input('tourtype');
        $packages->duration = $request->input('duration');
        $packages->status = $request->input('status');
        $packages->feature = $request->input('feature');
        $packages->save();
        return redirect('packages')->with('status',"Packages Added Successfully");
    }

    public function edit($id)
    {
        $packages = packages::find($id);
        $tourtype = tourtype::all();
        return view('admin.packages.edit', compact('packages', 'tourtype'));
    }

    public function update(Request $request, $id)
    {
        $packages = packages::find($id);
        if($request->hasFile('image'))
        {
                $image = $request->file('image');
                $filename = time().'.'.$image->extension();

                $destinationPath = public_path('assets/uploads/package/370/');
                $img = Image::make($image->path());
                $img->resize(370, 250, function ($constraint) {
                    // $constraint->aspectRatio();
                })->save($destinationPath.'/'.$filename);

                $destinationPath = public_path('assets/uploads/package/');
                $image->move($destinationPath, $filename);
                $packages->image = $filename;
        }

        $packages->packname = $request->input('packname');
        $packages->description = $request->input('description');
        $packages->tourtype = $request->input('tourtype');
        $packages->duration = $request->input('duration');
        $packages->status = $request->input('status');
        $packages->feature = $request->input('feature');
        $packages->update();
        return redirect('packages')->with('status',"Package Updated Successfully");
    }

    public function destroy($id)
    {
        $packages = packages::find($id);
        if($packages->image)
        {
            $path1 = 'assets/uploads/package/'.$packages->image;
            $path2 = 'assets/uploads/package/370/'.$packages->image;
            if(File::exists($path1))
            {
                File::delete($path1);
            }

            if(File::exists($path2))
            {
                File::delete($path2);
            }
        }
        $packages->delete();
        return redirect('packages')->with('status',"Package Deleted Successfuly");
    }

}
