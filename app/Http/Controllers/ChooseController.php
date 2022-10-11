<?php

namespace App\Http\Controllers;

use App\Choose;
use App\ChooseTitle;
use Illuminate\Http\Request;

class ChooseController extends Controller
{
    //Choose Title
    public function addChooseTitle(){
        return view('admin.choose.add-choose-title',[
            'choose' => ChooseTitle::first()
        ]);
    }

    public function saveChooseTitle(Request $request){
        $this->validate($request,[
            'title' => 'required'
        ]);
        $choose = ChooseTitle::first();
        $choose->title = $request->title;
        $choose->save();
        return back()->with('message', 'Update Successful');
    }

    //Choose Us
    public function addChoose(){
        return view('admin.choose.add-choose');
    }

    public function saveChoose(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'image' => 'required',
            'status' => 'required',
        ]);
        $image      = $request->file('image');
        $imageName  = time().'.'.$image->getClientOriginalName();
        $directory  = 'service_images/';
        $image->move($directory, $imageName);
        Choose::create([
            'title' => $request->title,
            'des' => $request->des,
            'image' => $directory.$imageName,
            'status' => $request->status,
        ]);
        return back()->with('message', 'Save Successful');
    }

    public function manageChoose(){
        return view('admin.choose.manage-choose',[
            'chooses' => Choose::orderBy('id', 'desc')->get()
        ]);
    }

    public function editChoose($id){
        return view('admin.choose.edit-choose',[
            'choose' => Choose::find($id)
        ]);
    }

    public function updateChoose(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'status' => 'required',
        ]);
        $choose = Choose::find($request->id);
        if ($request->hasFile('image')){
            @unlink($choose->image);
            $image      = $request->file('image');
            $imageName  = time().'.'.$image->getClientOriginalName();
            $directory  = 'service_images/';
            $image->move($directory, $imageName);
            $choose->image = $directory.$imageName;
        }

        $choose->title = $request->title;
        $choose->des = $request->des;
        $choose->status = $request->status;
        $choose->save();
        return back()->with('message', 'Update Successful');
    }

    public function deleteChoose(Request $request){
        $choose = Choose::find($request->id);
        @unlink($choose->image);
        $choose->delete();
        return back()->with('message', 'Delete Successful');
    }
}
