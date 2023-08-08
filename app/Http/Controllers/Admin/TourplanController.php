<?php

namespace App\Http\Controllers\Admin;

use App\Models\tourplan;
use App\Models\packages;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TourplanController extends Controller
{
    public function index()
    {
        $tour_plan = tourplan::join('packages', 'packages.id', '=', 'tourplan.packages_id')
                                ->select('tourplan.*', 'packages.packname')
                                ->get();

        return view('admin.tourplan.tourplan', compact('tour_plan'));
    }

    public function view($id)
    {
        $tour_plan = tourplan::join('packages', 'packages.id', '=', 'tourplan.packages_id')
                                ->select('tourplan.*', 'packages.packname')
                                ->find($id);

        return view('admin.tourplan.view', compact('tour_plan'));
    }

    public function add()
    {
        $packages = packages::all();
        return view('admin.tourplan.add', compact('packages'));
    }

    public function insert(Request $request)
    {
        $tour_plan = new tourplan();

        $tour_plan->title = $request->input('title');
        $tour_plan->packages_id = $request->input('packages_id');
        $tour_plan->description = $request->input('description');
        $tour_plan->status = $request->input('status');
        $tour_plan->save();
        return redirect('tourplan')->with('status',"Tour Plan Added Successfully");
    }

    public function edit($id)
    {
        $tour_plan = tourplan::find($id);
        $packages = packages::all();
        return view('admin.tourplan.edit', compact('tour_plan', 'packages'));
    }

    public function update(Request $request, $id)
    {
        $tour_plan = tourplan::find($id);

        $tour_plan->title = $request->input('title');
        $tour_plan->packages_id = $request->input('packages_id');
        $tour_plan->description = $request->input('description');
        $tour_plan->status = $request->input('status');
        $tour_plan->update();
        return redirect('tourplan')->with('status',"Tour Plan Updated Successfully");
    }

    public function destroy($id)
    {
        $tour_plan = tourplan::find($id);

        $tour_plan->delete();
        return redirect('tourplan')->with('status',"Tour Plan Deleted Successfuly");
    }
}
