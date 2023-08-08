<?php

namespace App\Http\Controllers;

use App\Models\packages;
use App\Models\testimonial;
use App\Models\tourtype;
use App\Models\booking;
use App\Models\setting;
use App\Models\imagecategory;
use App\Models\tourplan;
use App\Models\tourplanimage;
use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function index()
    {
        $packagesall = packages::all();
        $imagecategoryall = imagecategory::all();

        $packages = packages::all()->take(6);
        $imagecategory = imagecategory::all();
        $testimonial = testimonial::all();
        return view('welcome', compact('packages', 'testimonial', 'imagecategory', 'packagesall', 'imagecategoryall'));
    }

    public function gallery($id)
    {
        $packagesall = packages::all();
        $imagecategoryall = imagecategory::all();
        $imagecategory = imagecategory::join('gallary', 'gallary.category', '=', 'image_category.id')
                                        ->select('image_category.*', 'gallary.*')
                                        ->where('image_category.id', $id)
                                        ->get();

        return view('gallery', compact('imagecategory', 'packagesall', 'imagecategoryall'));
    }

    public function allpack()
    {
        $packagesall = packages::all();
        $imagecategoryall = imagecategory::all();

        $packages = packages::all();
        return view('package', compact('packages', 'packagesall', 'imagecategoryall'));
    }

    public function package($id)
    {
        $packagesall = packages::all();
        $imagecategoryall = imagecategory::all();

        $packages = packages::join('tourtype', 'tourtype.id', '=', 'packages.tourtype')
                                ->select('packages.*', 'tourtype.*')
                                ->find($id);

        $packageall = packages::all()->take(10);

        $tourplanimage = packages::with('tourPlans.tourPlanImages')->find($id);

        return view('packagedetails', compact('packages', 'packageall', 'packagesall', 'imagecategoryall', 'tourplanimage'));
    }

    public function book(Request $request)
    {
        $booking = new booking();

        $booking->name = $request->input('name');
        $booking->email = $request->input('email');
        $booking->number = $request->input('number');
        $booking->package = $request->input('package');
        $booking->adult = $request->input('adult');
        $booking->child = $request->input('child');
        $booking->date = $request->input('date');
        $booking->message = $request->input('message');
        $booking->save();
        return redirect('/')->with('status',"Booking Added Successfully");
    }

    public function con(Request $request)
    {
        $packagesall = packages::all();
        $imagecategoryall = imagecategory::all();

        $settings = setting::all();
        return view('contact', compact('settings', 'packagesall', 'imagecategoryall'));
    }

    public function inq(Request $request){
        $packagesall = packages::all();
        $imagecategoryall = imagecategory::all();

        return view('inquiry', compact('packagesall', 'imagecategoryall'));
    }

    public function about(Request $request){
        $packagesall = packages::all();
        $imagecategoryall = imagecategory::all();

        return view('about', compact('packagesall', 'imagecategoryall'));
    }
}
