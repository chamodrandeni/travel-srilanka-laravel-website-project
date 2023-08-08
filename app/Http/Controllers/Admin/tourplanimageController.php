<?php

namespace App\Http\Controllers\Admin;

use App\Models\tourplanimage;
use App\Models\tourplan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\storage;

class tourplanimageController extends Controller
{
    public function index()
    {
        $tourplanimage = tourplanimage::join('tourplan', 'tourplan.id', '=', 'tourplan_image.tourplan_id')
                                ->select('tourplan_image.*', 'tourplan.title')
                                ->get();

        return view('admin.tourplanimage.tourplanimage', compact('tourplanimage'));
    }

    public function view($id)
    {
        $tourplanimage = tourplanimage::join('tourplan', 'tourplan.id', '=', 'tourplan_image.tourplan_id')
                                ->select('tourplan_image.*', 'tourplan.title')
                                ->find($id);

        return view('admin.tourplanimage.view', compact('tourplanimage'));
    }

    public function add()
    {
        $tourplan = tourplan::all();
        return view('admin.tourplanimage.add', compact('tourplan'));
    }

    public function insert(Request $request)
    {
        $tourplanimage = new tourplanimage();
        if($request->hasFile('image'))
        {
                $image = $request->file('image');
                $filename = time().'.'.$image->extension();

                $destinationPath = public_path('assets/uploads/tourplanimage/370/');
                $img = Image::make($image->path());
                $img->resize(370, 250, function ($constraint) {
                    // $constraint->aspectRatio();
                })->save($destinationPath.'/'.$filename);

                $destinationPath = public_path('assets/uploads/tourplanimage/');
                $image->move($destinationPath, $filename);
                $tourplanimage->image = $filename;
        }

        $tourplanimage->tourplan_id = $request->input('tourplan_id');
        $tourplanimage->save();
        return redirect('tourplanimage')->with('status',"Packages Added Successfully");
    }

    public function edit($id)
    {
        $tourplanimage = tourplanimage::find($id);
        $tourplan = tourplan::all();
        return view('admin.tourplanimage.edit', compact('tourplanimage', 'tourplan'));
    }

    public function update(Request $request, $id)
    {
        $tourplanimage = tourplanimage::find($id);
        if($request->hasFile('image'))
        {
                $image = $request->file('image');
                $filename = time().'.'.$image->extension();

                $destinationPath = public_path('assets/uploads/tourplanimage/370/');
                $img = Image::make($image->path());
                $img->resize(370, 250, function ($constraint) {
                    // $constraint->aspectRatio();
                })->save($destinationPath.'/'.$filename);

                $destinationPath = public_path('assets/uploads/tourplanimage/');
                $image->move($destinationPath, $filename);
                $tourplanimage->image = $filename;
        }

        $tourplanimage->tourplan_id = $request->input('tourplan_id');
        $tourplanimage->update();
        return redirect('tourplanimage')->with('status',"Tour Plan Image Updated Successfully");
    }

    public function destroy($id)
    {
        $tourplanimage = tourplanimage::find($id);
        if($tourplanimage->image)
        {
            $path1 = 'assets/uploads/tourplanimage/'.$tourplanimage->image;
            $path2 = 'assets/uploads/tourplanimage/370/'.$tourplanimage->image;
            if(File::exists($path1))
            {
                File::delete($path1);
            }

            if(File::exists($path2))
            {
                File::delete($path2);
            }
        }
        $tourplanimage->delete();
        return redirect('tourplanimage')->with('status',"Tour Plan Image Deleted Successfuly");
    }

}
