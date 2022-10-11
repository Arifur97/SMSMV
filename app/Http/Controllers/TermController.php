<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Join;
use App\Footer;
use App\TermTitle;
use App\Term;

class TermController extends Controller
{
    public function addTermTitle(){
        return view('admin.term.add-term-title',[
            'term' => TermTitle::first()
        ]);
    }

    public function saveTermTitle(Request $request){
        $this->validate($request,[
            'title' => 'required'
        ]);
        $term = TermTitle::first();
        $term->title = $request->title;
        $term->save();
        return back()->with('message', 'Update Successful');
    }

    public function addTerm(){
        return view('admin.term.add-term');
    }

    public function saveTerm(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'status' => 'required'
        ]);
        Term::create([
            'title' => $request->title,
            'des' => $request->des,
            'status' => $request->status,
        ]);
        return back()->with('message', 'Save Successful');
    }

    public function manageTerm(){
        return view('admin.term.manage-term',[
            'terms' => Term::orderBy('id', 'desc')->get()
        ]);
    }

    public function editTerm($id){
        return view('admin.term.edit-term',[
            'term' => Term::find($id)
        ]);
    }

    public function updateTerm(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'status' => 'required'
        ]);
        $term = Term::find($request->id);
        $term->title = $request->title;
        $term->des = $request->des;
        $term->status = $request->status;
        $term->save();
        return back()->with('message', 'Update Successful');
    }

    public function deleteTerm(Request $request){
        $term = Term::find($request->id);
        $term->delete();
        return back()->with('message', 'Delete Successful'); 
    }
}
