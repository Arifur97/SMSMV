<?php

namespace App\Http\Controllers;

use App\Country;
use App\Operator;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function addOperator(){
        return view('admin.operator.add-operator',[
            'countries' => Country::all()
        ]);
    }

    public function saveOperator(Request $request){
        $this->validate($request,[
            'country_id' => 'required',
            'name' => 'required',
            'rate' => 'required',
            'status' => 'required',
        ]);
        Operator::create([
            'country_id' => $request->country_id,
            'name' => $request->name,
            'rate' => $request->rate,
            'status' => $request->status,
        ]);
        return back()->with('message', 'Save Successful');
    }

    public function manageOperator(){
        return view('admin.operator.manage-operator',[
            'operators' => Operator::orderBy('id', 'desc')->get()
        ]);
    }

    public function editOperator($id){
        return view('admin.operator.edit-operator',[
            'countries' => Country::all(),
            'operator' => Operator::find($id)
        ]);
    }

    public function updateOperator(Request $request){
        $this->validate($request,[
            'country_id' => 'required',
            'name' => 'required',
            'rate' => 'required',
            'status' => 'required',
        ]);
        $operator = Operator::find($request->id);
        $operator->country_id = $request->country_id;
        $operator->name = $request->name;
        $operator->rate = $request->rate;
        $operator->status = $request->status;
        $operator->save();
        return back()->with('message', 'Update Successful');
    }

    public function deleteOperator(Request $request){
        $operator = Operator::find($request->id);
        $operator->delete();
        return back()->with('message', 'Delete Successful');
    }
}
