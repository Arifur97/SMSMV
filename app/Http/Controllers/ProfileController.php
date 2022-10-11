<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
    public function profile(){
        return view('visitor.home.home');
    }

    public function visitorLogout(){
        Auth::guard('visitor')->logout();
        return redirect()->route('/');
    }

    public function yourPackage(){
        return view('visitor.package.your-package');
    }

    public function sending(){
        return view('visitor.package.your-sending');
    }
}
