<?php

namespace App\Http\Controllers;

use App\Models\Employeeadd;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 

 

class AdminController extends Controller
{
    function index(){
    return view('backend.dashboard');
    }

    function addEmployee(){
    return view('backend.addEmployee');
    }
    
        function employeeDetails(){
            $employeies = Employeeadd::all();
            return view('backend.employeedetails',['emp'=>$employeies]);
            }
    
            function employeeContact(){
                $employeies = Employeeadd::all();
                return view('backend.employeecontact',['emp'=>$employeies]);
                }

                function store(Request $req){
                    //  return $req->all();
                    $employeies = new Employeeadd();
                    $employeies->createEmployee($req);
                    return redirect('add-employee')->with('msg',"employee added successfull");
                }
            
    
   function employeelist(){
    $employeies = Employeeadd::all();
    return view('backend.employeelist',['emp'=>$employeies]);
   }


function pedit($p){
    $desirep=Employeeadd::find($p);
    return view("backend.employeeupdate",['emp'=>$desirep]);
}

function pupdate(Request $request ,$p){
    $desirep = Employeeadd::find($p);
    $p = new Employeeadd();
    if ($request->file('img')){
        if(file_exists($desirep->image)){
          unlink($desirep->image);
        }
        $desirep->image = $p->imageProcessing($request);
    }
    $desirep->first_name = $request->cnmae;
    $desirep->email = $request->email;
    $desirep->phone_number = $request->phone;
    


    $desirep->save();
    return back()->with('pmsg','Product Update Successfully!');
}

public function pdelete($p){
    $employeies = Employeeadd::find($p);
    $employeies->delete();

    return back()->with('pmsg','Product Deleted Successfully!');


}




    }






