<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class SliderController extends Controller
{
    public function addSlider(){
        return view('admin.slider.add-slider');
    }

    public function saveSlider(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'image' => 'required',
            'status' => 'required',
        ]);
        $image      = $request->file('image');
        $imageName  = time().'.'.$image->getClientOriginalName();
        $directory  = 'slider_images/';
        $image->move($directory, $imageName);
        Slider::create([
            'title' => $request->title,
            'des' => $request->des,
            'btn' => $request->btn,
            'image' => $directory.$imageName,
            'status' => $request->status,
        ]);
        return back()->with('message', 'Save Successful');
    }

    public function manageSlider(){
        return view('admin.slider.manage-slider',[
            'sliders' => Slider::orderBy('id', 'desc')->get()
        ]);
    }

    public function editSlider($id){
        return view('admin.slider.edit-slider',[
            'slider' => Slider::find($id)
        ]);
    }

    public function updateSlider(Request $request){
        $this->validate($request,[
            'title' => 'required',
        ]);
        $slider = Slider::find($request->id);
        if ($request->hasFile('image')){
            @unlink($slider->image);
            $image      = $request->file('image');
            $imageName  = time().'.'.$image->getClientOriginalName();
            $directory  = 'slider_images/';
            $image->move($directory, $imageName);
            $slider->image = $directory.$imageName;
        }

        $slider->title = $request->title;
        $slider->des = $request->des;
        $slider->btn = $request->btn;
        $slider->status = $request->status;
        $slider->save();
        return back()->with('message', 'Update Successful');
    }

    public function deleteSlider(Request $request){
        $slider = Slider::find($request->id);
        @unlink($slider->image);
        $slider->delete();
        return back()->with('message', 'Delete Successful');
    }
}
