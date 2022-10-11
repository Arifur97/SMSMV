<?php

namespace App\Http\Controllers;

use App\TestSMS;
use Illuminate\Http\Request;

class TestSMSController extends Controller
{
    public function addTestSMS(){
        return view('admin.testSMS.add-test-sms',[
            'testSMS' => TestSMS::first()
        ]);
    }

    public function saveTestSMS(Request $request){
        $this->validate($request,[
            'title' => 'required',
        ]);
        $about = TestSMS::first();
        $about->title = $request->title;
        $about->des = $request->des;
        $about->number = $request->number;
        $about->btn = $request->btn;
        $about->save();
        return back()->with('message', 'Update Successful')->withInput();
    }
}
