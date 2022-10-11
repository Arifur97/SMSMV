<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function contact(){
        return view('front.contact.contact');
    }

    //Backend
    public function addContact(){
        return view('admin.contact.add-contact',[
            'contact' => Contact::first()
        ]);
    }

    public function saveContact(Request $request){
        $contact = Contact::first();
        $contact->title = $request->title;
        $contact->add_title = $request->add_title;
        $contact->add_des = $request->add_des;
        $contact->email_title = $request->email_title;
        $contact->email_des = $request->email_des;
        $contact->phone_title = $request->phone_title;
        $contact->phone_des = $request->phone_des;
        $contact->map_link = $request->map_link;
        $contact->save();
        return back()->with('message','Update Successful')->withInput();
    }
}
