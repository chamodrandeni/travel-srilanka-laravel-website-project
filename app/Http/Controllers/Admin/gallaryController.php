<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use App\Models\imagecategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\storage;

class gallaryController extends Controller
{
    public function index()
    {
        $gallery = Gallery::join('image_category', 'image_category.id', '=', 'gallary.category')
                                ->select('gallary.*', 'image_category.img_name')
                                ->get();

        return view('admin.gallary.gallary', compact('gallery'));
    }

    public function frount()
    {
        $gallery = Gallery::all();
        return view('gallery', compact('gallery'));
    }

    public function view($id)
    {
        $gallery = Gallery::join('image_category', 'image_category.id', '=', 'gallary.category')
                                ->select('gallary.*', 'image_category.img_name')
                                ->find($id);

        return view('admin.gallary.view', compact('gallery'));
    }

    public function add()
    {
        $imagecategory = imagecategory::all();
        return view('admin.gallary.add', compact('imagecategory'));
    }

    public function insert(Request $request)
    {
        $gallery = new Gallery();
        if($request->hasFile('image'))
        {
                $image = $request->file('image');
                $filename = time().'.'.$image->extension();

                $destinationPath = public_path('assets/uploads/gallery/200/');
                $img = Image::make($image->path());
                $img->resize(200, 150, function ($constraint) {
                    // $constraint->aspectRatio();
                })->save($destinationPath.'/'.$filename);

                $destinationPath = public_path('assets/uploads/gallery/');
                $image->move($destinationPath, $filename);
                $gallery->gallary_image = $filename;
        }

        $gallery->title = $request->input('title');
        $gallery->category = $request->input('category');
        $gallery->description = $request->input('description');
        $gallery->meta_keywords = $request->input('meta_keywords');
        $gallery->save();
        return redirect('gallery')->with('status',"Images Added Successfully");
    }

    public function edit($id)
    {
        $gallery = Gallery::find($id);
        $imagecategory = imagecategory::all();
        return view('admin.gallary.edit', compact('gallery', 'imagecategory'));
    }

    public function update(Request $request, $id)
    {
        $gallery = Gallery::find($id);
        if($request->hasFile('image'))
        {
            $path1 = 'assets/uploads/gallery/'.$gallery->gallary_image;
            $path2 = 'assets/uploads/gallery/200/'.$gallery->gallary_image;
            if(File::exists($path1))
            {
                File::delete($path1);
            }

            if(File::exists($path2))
            {
                File::delete($path2);
            }
            $image = $request->file('image');
            $filename = time().'.'.$image->extension();

            $destinationPath = public_path('assets/uploads/gallery/200/');
            $img = Image::make($image->path());
            $img->resize(200, 150, function ($constraint) {
                // $constraint->aspectRatio();
            })->save($destinationPath.'/'.$filename);

            $destinationPath = public_path('assets/uploads/gallery/');
            $image->move($destinationPath, $filename);
            $gallery->gallary_image = $filename;
        }
        $gallery->title = $request->input('title');
        $gallery->category = $request->input('category');
        $gallery->description = $request->input('description');
        $gallery->meta_keywords = $request->input('meta_keywords');
        $gallery->save();
        return redirect('gallery')->with('status',"Images Added Successfully");
    }


    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        if($gallery->image)
        {
            $path1 = 'assets/uploads/gallery/'.$gallery->gallary_image;
            $path2 = 'assets/uploads/gallery/200/'.$gallery->gallary_image;
            if(File::exists($path1))
            {
                File::delete($path1);
            }

            if(File::exists($path2))
            {
                File::delete($path2);
            }
        }
        $gallery->delete();
        return redirect('gallery')->with('status',"Images Deleted Successfuly");
    }
}
