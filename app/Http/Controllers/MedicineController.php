<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;

class MedicineController extends Controller
{

    public function Create(){
        return view('pages.medical.create');
    }
    public function createSubmit(Request $request){

        $this->validate(
            $request,
            [
                'med_name'=>'required',
                'med_details'=>'required',
                'men_date'=>'required',
                'exp_date'=>'required',
                'med_cat'=>'required',
                'quantity'=>'required',
            ],
            [
                'med_name.required'=>'Please put your name',
                'med_details.required'=>'Please put your name',
                'men_date.required'=>'Please put your name',
                'exp_date.required'=>'Please put your name',
                'med_cat.required'=>'Please put your name',
                'quantity.required'=>'Please put your name',
            ]
        );

        $var = new Medicine();
        $var->med_name= $request->med_name;
        $var->med_details = $request->med_details;
        $var->men_date = $request->men_date;
        $var->exp_date=$request->exp_date;
        $var->med_cat=$request->med_cat;
        $var->quantity=$request->quantity;
        $var->save();


        return "OK";      
    }
    public function list(){

        $meds = Medicine::all();
        return view('pages.medical.list')->with('meds',$meds);
    }
    

    public function APIList(){
        return Medicine::all();
    }
    public function APIPost(Request $req){
        $var = new Medicine();
        $var->med_name= $request->med_name;
        $var->med_details = $request->med_details;
        $var->men_date = $request->men_date;
        $var->exp_date=$request->exp_date;
        $var->med_cat=$request->med_cat;
        $var->quantity=$request->quantity;
        $var->save();

        return $req;
    }
}