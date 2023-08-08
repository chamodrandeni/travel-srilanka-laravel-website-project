<?php

namespace App\Http\Controllers\Admin;

use App\Models\tourtype;
use App\Models\imagecategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tourtypeController extends Controller
{
    public function index()
    {
        $tourtype = tourtype::all();
        return view('admin.tourtype.tourtype', compact('tourtype'));
    }

    public function view($id)
    {
        $tourtype = tourtype::join('image_category', 'image_category.id', '=', 'tourtype.imagecategory')
                                ->select('tourtype.*', 'image_category.img_name')
                                ->find($id);

        return view('admin.tourtype.view', compact('tourtype'));
    }

    public function add()
    {
        $imagecategory = imagecategory::all();
        return view('admin.tourtype.add', compact('imagecategory'));
    }

    public function insert(Request $request)
    {
        $tourtype = new tourtype();

        $tourtype->name = $request->input('name');
        $tourtype->grouptype = $request->input('grouptype');
        $tourtype->guidetype = $request->input('guidetype');
        $tourtype->imagecategory = $request->input('imagecategory');
        $tourtype->save();
        return redirect('tourtype')->with('status',"Tour Type Added Successfully");
    }

    public function edit($id)
    {
        $tourtype = tourtype::find($id);
        $imagecategory = imagecategory::all();
        return view('admin.tourtype.edit', compact('tourtype', 'imagecategory'));
    }

    public function update(Request $request, $id)
    {
        $tourtype = tourtype::find($id);

        $tourtype->name = $request->input('name');
        $tourtype->grouptype = $request->input('grouptype');
        $tourtype->guidetype = $request->input('guidetype');
        $tourtype->imagecategory = $request->input('imagecategory');
        $tourtype->update();
        return redirect('tourtype')->with('status',"Tour Type Updated Successfully");
    }

    public function destroy($id)
    {
        $tourtype = tourtype::find($id);
        $tourtype->delete();
        return redirect('tourtype')->with('status',"Tour Type Deleted Successfuly");
    }
}
