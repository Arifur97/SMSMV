<?php

namespace App\Http\Controllers;

use App\Package;
use App\PackageTitle;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function addPackageTitle(){
        return view('admin.package.add-package-title',[
            'package' => PackageTitle::first()
        ]);
    }

    public function savePackageTitle(Request $request){
        $this->validate($request,[
            'title' => 'required'
        ]);
        $package = PackageTitle::first();
        $package->title = $request->title;
        $package->save();
        return back()->with('message', 'Update Successful');
    }

    public function addPackage(){
        return view('admin.package.add-package');
    }

    public function savePackage(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'status' => 'required'
        ]);
        Package::create([
            'title' => $request->title,
            'des' => $request->des,
            'btn' => $request->btn,
            'status' => $request->status,
        ]);
        return back()->with('message', 'Save Successful');
    }

    public function managePackage(){
        return view('admin.package.manage-package',[
            'packages' => Package::orderBy('id', 'desc')->get()
        ]);
    }

    public function editPackage($id){
        return view('admin.package.edit-package',[
            'package' => Package::find($id)
        ]);
    }

    public function updatePackage(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'status' => 'required'
        ]);
        $package = Package::find($request->id);
        $package->title = $request->title;
        $package->des = $request->des;
        $package->btn = $request->btn;
        $package->status = $request->status;
        $package->save();
        return back()->with('message', 'Update Successful');
    }

    public function deletePackage(Request $request){
        $package = Package::find($request->id);
        $package->delete();
        return back()->with('message', 'Delete Successful');
    }
}
