<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Mail;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\Container\BindingResolutionException;

class FrontendController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.home', compact('users'));
    }
}
