<?php

namespace App\Http\Controllers;

use App\Join;
use Illuminate\Http\Request;

class JoinController extends Controller
{
    public function addJoinSMS(){
        return view('admin.joinSMS.add-joinSMS',[
            'join' => Join::first()
        ]);
    }

    public function saveJoinSMS(Request $request){
        $this->validate($request,[
            'title' => 'required',
        ]);
        $join = Join::first();
        if ($request->hasFile('image')){
            @unlink($join->image);
            $image      = $request->file('image');
            $imageName  = time().'.'.$image->getClientOriginalName();
            $directory  = 'service_images/';
            $image->move($directory, $imageName);
            $join->image = $directory.$imageName;
        }

        $join->title = $request->title;
        $join->des = $request->des;
        $join->btn1 = $request->btn1;
        $join->btn2 = $request->btn2;
        $join->save();
        return back()->with('message', 'Update Successful');
    }
}
