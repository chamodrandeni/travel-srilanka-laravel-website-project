<?php

namespace App\Http\Controllers\Admin;

use App\Models\booking;
use App\Models\packages;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class bookingController extends Controller
{
    public function index()
    {
        $booking = booking::join('packages', 'packages.id', '=', 'booking.package')
                                ->select('booking.*', 'packages.packname')
                                ->get();

        return view('admin.booking.booking', compact('booking'));
    }

    public function view($id)
    {
        $booking = booking::join('packages', 'packages.id', '=', 'booking.package')
                                ->select('booking.*', 'packages.packname')
                                ->find($id);

        return view('admin.booking.view', compact('booking'));
    }

    public function destroy($id)
    {
        $booking = booking::find($id);
        $booking->delete();
        return redirect('booking')->with('status',"Booking Deleted Successfuly");
    }
}
