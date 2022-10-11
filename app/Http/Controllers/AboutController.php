<?php

namespace App\Http\Controllers;

use App\About;
use App\Feature;
use App\FeatureBG;
use Illuminate\Http\Request;

class AboutController extends Controller
{
//    public function about(){
//        return view('front.about.about');
//    }

    //Backend
    public function addAbout(){
        return view('admin.about.add-about',[
            'about' => About::first()
        ]);
    }

    public function saveAbout(Request $request){
        $this->validate($request,[
            'w_title' => 'required',
            'a_title' => 'required',
        ]);
        $about = About::first();
        $about->w_title = $request->w_title;
        $about->w_des = $request->w_des;
        $about->a_title = $request->a_title;
        $about->a_des = $request->a_des;
        $about->save();
        return back()->with('message', 'Update Successful')->withInput();
    }

    //Feature
    public function addFeature(){
        return view('admin.about.add-feature');
    }

    public function saveFeature(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'image' => 'required',
            'status' => 'required',
        ]);
        $image      = $request->file('image');
        $imageName  = time().'.'.$image->getClientOriginalName();
        $directory  = 'feature_images/';
        $image->move($directory, $imageName);
        Feature::create([
            'title' => $request->title,
            'des' => $request->des,
            'status' => $request->status,
            'image' => $directory.$imageName,
        ]);
        return back()->with('message', 'Save Successful');
    }

    public function manageFeature(){
        return view('admin.about.manage-feature',[
            'features' => Feature::orderBy('id', 'desc')->get()
        ]);
    }

    public function editFeature($id){
        return view('admin.about.edit-feature',[
            'feature' => Feature::find($id)
        ]);
    }

    public function updateFeature(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'status' => 'required',
        ]);
        $feature = Feature::find($request->id);
        if ($request->hasFile('image')){
            @unlink($feature->image);
            $image      = $request->file('image');
            $imageName  = time().'.'.$image->getClientOriginalName();
            $directory  = 'feature_images/';
            $image->move($directory, $imageName);
            $feature->image = $directory.$imageName;
        }

        $feature->title = $request->title;
        $feature->des = $request->des;
        $feature->status = $request->status;
        $feature->save();
        return back()->with('message', 'Update Successful');
    }

    public function deleteFeature(Request $request){
        $feature = Feature::find($request->id);
        @unlink($feature->image);
        $feature->delete();
        return back()->with('message', 'Delete Successful');
    }

    //Feature Background
    public function addFeatureBG(){
        return view('admin.about.add-feature-bg',[
            'featureBG' => FeatureBG::first()
        ]);
    }

    public function saveFeatureBG(Request $request){
        $featureBG = FeatureBG::first();
        if ($request->hasFile('image')){
            @unlink($featureBG->image);
            $image      = $request->file('image');
            $imageName  = time().'.'.$image->getClientOriginalName();
            $directory  = 'feature_images/';
            $image->move($directory, $imageName);
            $featureBG->image = $directory.$imageName;
        }

        $featureBG->save();
        return back()->with('message', 'Update Successful');
    }
}
