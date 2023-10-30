<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employeeadd;
 
class Employeeadd extends Model
{
    use HasFactory;

    function imageProcessing($req){
        $image = $req->file('img');
        $imageName = $image->getClientOriginalName();
        $directory = "category-image/";
        $image->move($directory, $imageName);
        return $directory.$imageName;
    }
     function createEmployee($data){
        $employeies = new Employeeadd();
        
        $employeies->first_name=$data->cname;
        $employeies->last_name=$data->lname;
       
        $employeies->email=$data->email;
        $employeies->password=$data->pass;
        $employeies->phone_number=$data->phone;
        $employeies->image=$employeies->imageprocessing($data);
        $employeies->save();
     }

}
