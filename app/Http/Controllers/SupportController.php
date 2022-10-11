<?php

namespace App\Http\Controllers;

use App\Support;
use App\SupportTitle;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function addSupportTitle(){
        return view('admin.support.add-support-title',[
            'support' => SupportTitle::first()
        ]);
    }

    public function saveSupportTitle(Request $request){
        $this->validate($request,[
            'title' => 'required'
        ]);
        $support = SupportTitle::first();
        $support->title = $request->title;
        $support->save();
        return back()->with('message', 'Update Successful');
    }

    public function addSupport(){
        return view('admin.support.add-support');
    }

    public function saveSupport(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'status' => 'required'
        ]);
        Support::create([
            'title' => $request->title,
            'des' => $request->des,
            'status' => $request->status,
        ]);
        return back()->with('message', 'Save Successful');
    }

    public function manageSupport(){
        return view('admin.support.manage-support',[
            'supports' => Support::orderBy('id', 'desc')->get()
        ]);
    }

    public function editSupport($id){
        return view('admin.support.edit-support',[
            'support' => Support::find($id)
        ]);
    }

    public function updateSupport(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'status' => 'required'
        ]);
        $support = Support::find($request->id);
        $support->title = $request->title;
        $support->des = $request->des;
        $support->status = $request->status;
        $support->save();
        return back()->with('message', 'Update Successful');
    }

    public function deleteSupport(Request $request){
        $support = Support::find($request->id);
        $support->delete();
        return back()->with('message', 'Delete Successful');
    }
}
