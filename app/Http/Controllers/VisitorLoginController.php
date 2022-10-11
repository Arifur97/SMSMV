<?php

namespace App\Http\Controllers;

use App\Visitor;
use Illuminate\Http\Request;
use Auth;
use App\Join;
use App\Footer;

class VisitorLoginController extends Controller
{
    public function index(){
        $title = 'Admin Login';
//        if(Auth::guard('visitor')->check()){
//            return redirect()->route('admin.dashboard');
//        }
        return view('front.login.login2', compact('title'),[
            'join' => Join::first(),
            'footer' => Footer::first(),
        ]);
    }
    public function visitorCheck(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        if(Auth::guard('visitor')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])){
            return redirect()->route('profile');
        }

        return back()->withErrors('The combination of username or password is wrong!!');
    }

    public function visitorRegister(){
        return view('front.login.register',[
            'join' => Join::first(),
            'footer' => Footer::first(),
        ]);
    }

    public function saveRegister(Request $request){
        $this->validate($request,[
            'email' => 'required|unique:visitors,email',
            // 'phone' => 'unique:visitors,phone',
            'password' => 'required',
        ]);
        Visitor::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'phone' => $request['phone'],
            'address' => $request['address'],
        ]);
        if(Auth::guard('visitor')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]))
        return redirect()->route('profile')->withSuccess('Registration Successful');
    }
}
