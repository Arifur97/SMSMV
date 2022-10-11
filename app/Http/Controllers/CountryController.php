<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;
use Image;

class CountryController extends Controller
{
    public function addCountry(){
        return view('admin.country.add-country');
    }

    public function saveCountry(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'image' => 'required',
            'status' => 'required',
        ]);
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = $image->hashName();
            $location = 'country_images/'.$filename;
            Image::make($image)->resize(300, 200, function($constraint) { $constraint->aspectRatio(); })->save($location);
        }
        Country::create([
            'name' => $request->name,
            'status' => $request->status,
            'image' => $request->hasFile('image') ? $filename : null,
        ]);
        return back()->with('message', 'Save Successful');
    }

    public function manageCountry(){
        return view('admin.country.manage-country',[
            'countries' => Country::orderBy('id', 'desc')->get()
        ]);
    }

    public function editCountry($id){
        return view('admin.country.edit-country',[
            'country' => Country::find($id)
        ]);
    }

    public function updateCountry(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'status' => 'required',
        ]);
        $country = Country::find($request->id);
        if($request->hasFile('image')){
            @unlink('country_images/'.$country->image);
            $image = $request->file('image');
            $filename = $image->hashName();
            $location = 'country_images/'.$filename;
            Image::make($image)->resize(300, 200, function($constraint) { $constraint->aspectRatio(); })->save($location);
            $country->image = $filename;
        }
        $country->name = $request->name;
        $country->status = $request->status;
        $country->save();
        return back()->with('message', 'Update Successful');
    }

    public function deleteCountry(Request $request){
        $country = Country::find($request->id);
        @unlink('country_images/'.$country->image);
        $country->delete();
        return back()->with('message', 'Delete Successful');
    }
}
