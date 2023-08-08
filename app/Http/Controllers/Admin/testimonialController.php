<?php

namespace App\Http\Controllers\Admin;

use App\Models\testimonial;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class testimonialController extends Controller
{
    public function index()
    {
        $perPage = 2; // Number of records per page
        $testimonial = testimonial::paginate($perPage);
        return view('admin.testimonial.testimonial', compact('testimonial'));
    }

    public function view($id)
    {
        $testimonial = testimonial::find($id);
        return view('admin.testimonial.view', compact('testimonial'));
    }

    public function add()
    {
        return view('admin.testimonial.add');
    }

    public function insert(Request $request)
    {
        $testimonial = new testimonial();

        $testimonial->name = $request->input('name');
        $testimonial->message = $request->input('message');
        $testimonial->aveter = $request->input('aveter');
        $testimonial->status = $request->input('status');
        $testimonial->save();
        return redirect('testimonial')->with('status',"Testimonial Added Successfully");
    }

    public function edit($id)
    {
        $testimonial = testimonial::find($id);
        return view('admin.testimonial.edit', compact('testimonial'));
    }

    public function update(Request $request, $id)
    {
        $testimonial = testimonial::find($id);

        $testimonial->name = $request->input('name');
        $testimonial->message = $request->input('message');
        $testimonial->aveter = $request->input('aveter');
        $testimonial->status = $request->input('status');
        $testimonial->update();
        return redirect('testimonial')->with('status',"Testimonial Updated Successfully");
    }

    public function destroy($id)
    {
        $testimonial = testimonial::find($id);

        $testimonial->delete();
        return redirect('testimonial')->with('status',"Testimonial Deleted Successfuly");
    }
}
