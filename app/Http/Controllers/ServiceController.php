<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceTitle;
use App\Service;

class ServiceController extends Controller
{
    public function service(){
        return view('front.service.service');
    }

    //Backend
    // Service Title
    public function addServiceTitle(){
        return view('admin.service.add-service-title',[
            'service' => ServiceTitle::first()
        ]);
    }

    public function saveServiceTitle(Request $request){
        $this->validate($request,[
            'title' => 'required'
        ]);
        $contact = ServiceTitle::first();
        $contact->title = $request->title;
        $contact->des = $request->des;
        $contact->save();
        return back()->with('message','Update Successful')->withInput();
    }

    //Service
    public function addService(){
        return view('admin.service.add-service');
    }

    public function saveService(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'image' => 'required',
            'status' => 'required',
        ]);
        $image      = $request->file('image');
        $imageName  = time().'.'.$image->getClientOriginalName();
        $directory  = 'service_images/';
        $image->move($directory, $imageName);
        Service::create([
            'title' => $request->title,
            'des' => $request->des,
            'btn' => $request->btn,
            'color' => $request->color,
            'image' => $directory.$imageName,
            'status' => $request->status,
        ]);
        return back()->with('message', 'Save Successful');
    }

    public function manageService(){
        return view('admin.service.manage-service',[
            'services' => Service::orderBy('id', 'desc')->get()
        ]);
    }

    public function editService($id){
        return view('admin.service.edit-service',[
            'service' => Service::find($id)
        ]);
    }

    public function updateService(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'status' => 'required',
        ]);
        $service = Service::find($request->id);
        if ($request->hasFile('image')){
            @unlink($service->image);
            $image      = $request->file('image');
            $imageName  = time().'.'.$image->getClientOriginalName();
            $directory  = 'service_images/';
            $image->move($directory, $imageName);
            $service->image = $directory.$imageName;
        }

        $service->title = $request->title;
        $service->des = $request->des;
        $service->btn = $request->btn;
        $service->color = $request->color;
        $service->status = $request->status;
        $service->save();
        return back()->with('message', 'Update Successful');
    }

    public function deleteService(Request $request){
        $service = Service::find($request->id);
        @unlink($service->image);
        $service->delete();
        return back()->with('message', 'Update Successful');
    }
}
