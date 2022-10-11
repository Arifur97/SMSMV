<?php

namespace App\Http\Controllers;

use App\Developer;
use App\DFeatureOne;
use App\DFeatureOneBG;
use App\DFeatureTwo;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
//    public function developer(){
//        return view('front.developer.developer');
//    }

    //Backend
    public function addDeveloperTitle(){
        return view('admin.developer.add-developer-title',[
            'developer' => Developer::first()
        ]);
    }

    public function saveDeveloperTitle(Request $request){
        $this->validate($request,[
            'title' => 'required'
        ]);
        $developer = Developer::first();
        $developer->title = $request->title;
        $developer->des1 = $request->des1;
        $developer->des2 = $request->des2;
        $developer->btn = $request->btn;
        $developer->save();
        return back()->with('message', 'Update Successful');
    }

    //Feature One Background
    public function addFeatureOneBG(){
        return view('admin.developer.add-feature-one-bg',[
            'featureOneBG' => DFeatureOneBG::first()
        ]);
    }

    public function saveFeatureOneBG(Request $request){
        $featureOneBG = DFeatureOneBG::first();
        if ($request->hasFile('image')){
            @unlink($featureOneBG->image);
            $image      = $request->file('image');
            $imageName  = time().'.'.$image->getClientOriginalName();
            $directory  = 'feature_images/';
            $image->move($directory, $imageName);
            $featureOneBG->image = $directory.$imageName;
        }

        $featureOneBG->save();
        return back()->with('message', 'Update Successful');
    }

    //Feature One
    public function addFeatureOne(){
        return view('admin.developer.add-feature-one');
    }

    public function saveFeatureOne(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'image' => 'required',
            'status' => 'required',
        ]);
        $image      = $request->file('image');
        $imageName  = time().'.'.$image->getClientOriginalName();
        $directory  = 'feature_images/';
        $image->move($directory, $imageName);
        DFeatureOne::create([
            'title' => $request->title,
            'des' => $request->des,
            'image' => $directory.$imageName,
        ]);
        return back()->with('message', 'Save Successful');
    }

    public function manageFeatureOne(){
        return view('admin.developer.manage-feature-one',[
            'features' => DFeatureOne::orderBy('id', 'desc')->get()
        ]);
    }

    public function editFeatureOne($id){
        return view('admin.developer.edit-feature-one',[
            'feature' => DFeatureOne::find($id)
        ]);
    }

    public function updateFeatureOne(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'status' => 'required',
        ]);
        $feature = DFeatureOne::find($request->id);
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

    public function deleteFeatureOne(Request $request){
        $feature = DFeatureOne::find($request->id);
        @unlink($feature->image);
        $feature->delete();
        return back()->with('message', 'Delete Successful');
    }

    //Feature Two
    public function addFeatureTwo(){
        return view('admin.developer.add-feature-two');
    }

    public function saveFeatureTwo(Request $request){
        $this->validate($request,[
            'image' => 'required',
            'status' => 'required',
        ]);
        $image      = $request->file('image');
        $imageName  = time().'.'.$image->getClientOriginalName();
        $directory  = 'feature_images/';
        $image->move($directory, $imageName);
        DFeatureTwo::create([
            'des' => $request->des,
            'image' => $directory.$imageName,
        ]);
        return back()->with('message', 'Save Successful');
    }

    public function manageFeatureTwo(){
        return view('admin.developer.manage-feature-two',[
            'features' => DFeatureTwo::orderBy('id', 'desc')->get()
        ]);
    }

    public function editFeatureTwo($id){
        return view('admin.developer.edit-feature-two',[
            'feature' => DFeatureTwo::find($id)
        ]);
    }

    public function updateFeatureTwo(Request $request){
        $this->validate($request,[
            'status' => 'required',
        ]);
        $feature = DFeatureTwo::find($request->id);
        if ($request->hasFile('image')){
            @unlink($feature->image);
            $image      = $request->file('image');
            $imageName  = time().'.'.$image->getClientOriginalName();
            $directory  = 'feature_images/';
            $image->move($directory, $imageName);
            $feature->image = $directory.$imageName;
        }

        $feature->des = $request->des;
        $feature->status = $request->status;
        $feature->save();
        return back()->with('message', 'Update Successful');
    }

    public function deleteFeatureTwo(Request $request){
        $feature = DFeatureTwo::find($request->id);
        @unlink($feature->image);
        $feature->delete();
        return back()->with('message', 'Delete Successful');
    }
}
