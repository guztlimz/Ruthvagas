<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    //
    Public function index()
    {
        $applicant = Applicant::all();
        return response()->json($applicant);
    }


    public function store (Request $request){

        try{

            $applicant= new Applicant();

            $applicant->fill($request->all());
            
            $applicant->save();
    
            return redirect('/applicant');

        }
        catch(\Throwable $th){
            return response()->json($th, 500);

            
        }
    }//store
}
