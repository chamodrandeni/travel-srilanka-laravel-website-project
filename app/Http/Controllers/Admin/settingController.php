<?php

namespace App\Http\Controllers\Admin;

use App\Models\setting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class settingController extends Controller
{
    public function index()
    {
        $setting = setting::all();
        return view('admin.setting.setting', compact('setting'));
    }

    public function edit($id)
    {
        $setting = setting::find($id);
        return view('admin.setting.edit', compact('setting'));
    }

    public function update(Request $request, $id)
    {
        $setting = setting::find($id);

        $setting->name = $request->input('name');
        $setting->address = $request->input('address');
        $setting->email = $request->input('email');
        $setting->number = $request->input('number');
        $setting->maplink = $request->input('maplink');
        $setting->facebook = $request->input('facebook');
        $setting->twitter = $request->input('twitter');
        $setting->update();
        return redirect('setting')->with('status',"Setting Updated Successfully");
    }

}
