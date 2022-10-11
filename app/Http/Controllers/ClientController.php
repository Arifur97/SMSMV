<?php

namespace App\Http\Controllers;

use App\Client;
use App\ClientTitle;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function addClientTitle(){
        return view('admin.client.add-client-title',[
            'client' => ClientTitle::first()
        ]);
    }

    public function saveClientTitle(Request $request){
        $this->validate($request,[
            'title' => 'required'
        ]);
        $client = ClientTitle::first();
        $client->title = $request->title;
        $client->save();
        return back()->with('message','Update Successful')->withInput();
    }

    public function addClient(){
        return view('admin.client.add-client');
    }

    public function saveClient(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'comment' => 'required',
            'image' => 'required',
            'status' => 'required',
        ]);
        $image      = $request->file('image');
        $imageName  = time().'.'.$image->getClientOriginalName();
        $directory  = 'client_images/';
        $image->move($directory, $imageName);
        Client::create([
            'name' => $request->name,
            'comment' => $request->comment,
            'image' => $directory.$imageName,
            'status' => $request->status,
        ]);
        return back()->with('message', 'Save Successful');
    }

    public function manageClient(){
        return view('admin.client.manage-client',[
            'clients' => Client::orderBy('id', 'desc')->get()
        ]);
    }

    public function editClient($id){
        return view('admin.client.edit-client',[
            'client' => Client::find($id)
        ]);
    }

    public function updateClient(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'status' => 'required',
        ]);
        $client = Client::find($request->id);
        if ($request->hasFile('image')){
            @unlink($client->image);
            $image      = $request->file('image');
            $imageName  = time().'.'.$image->getClientOriginalName();
            $directory  = 'client_images/';
            $image->move($directory, $imageName);
            $client->image = $directory.$imageName;
        }

        $client->name = $request->name;
        $client->comment = $request->comment;
        $client->status = $request->status;
        $client->save();
        return back()->with('message', 'Update Successful');
    }

    public function deleteClient(Request $request){
        $client = Client::find($request->id);
        @unlink($client->image);
        $client->delete();
        return back()->with('message', 'Delete Successful');
    }
}
