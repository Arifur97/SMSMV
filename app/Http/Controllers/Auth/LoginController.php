<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\Join;
use App\Footer;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        // $this->middleware('guest:admin')->except('logout');
//        $this->middleware('guest:visitor')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

//    public function showVisitorLoginForm()
//    {
//        return view('front.login.login2', [
//            'url' => 'visitor',
//            'join' => Join::first(),
//            'footer' => Footer::first(),
//            ]);
//    }
//
//    public function visitorLogin(Request $request)
//    {
//        $this->validate($request, [
//            'email'   => 'required|email',
//            'password' => 'required|min:6'
//        ]);
//
//        if (Auth::guard('visitor')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
//
//            return redirect('/profile');
//        }
//        return back()->withInput($request->only('email', 'remember'));
//    }
}
