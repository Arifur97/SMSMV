<?php

namespace App\Http\Controllers;

use App\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function addFooter(){
        return view('admin.footer.add-footer',[
            'footer' => Footer::first()
        ]);
    }

    public function saveFooter(Request $request)
    {
        $this->validate($request, [
            'des' => 'required',
            'title' => 'required',
        ]);
        $footer = Footer::first();
        if ($request->hasFile('image')){
            @unlink($footer->image);
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalName();
            $directory = 'client_images/';
            $image->move($directory, $imageName);
            $footer->image = $directory . $imageName;
        }

        $footer->des = $request->des;
        $footer->title = $request->title;
        $footer->number = $request->number;
        $footer->copy = $request->copy;
        $footer->link1 = $request->link1;
        $footer->link2 = $request->link2;
        $footer->link3 = $request->link3;
        $footer->link4 = $request->link4;
        $footer->link5 = $request->link5;
        $footer->link6 = $request->link6;
        $footer->link7 = $request->link7;
        $footer->link8 = $request->link8;
        $footer->link9 = $request->link9;
        $footer->link10 = $request->link10;
        $footer->save();
        return back()->with('message', 'Update Successful');
    }
}
