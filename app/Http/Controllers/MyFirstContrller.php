<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\order;

class MyFirstContrller extends Controller
{
    //
    public function userData(){
        $userData = ["ali","aqsa","hamza","rafiya"];
        return view ('users',compact('userData'));

    }
       
    public function subData(Request $request){

        $userName = $request->uName;
        $userEmail = $request->uEmail;
        $userPass = $request->uPassword;
        $userData = [$userName,$userEmail,$userPass];
        return view('select',compact('userData'));
    } 


    // insert Data
    public function insertData(Request $req){


            $insData = new order();
            $insData->name = $req->uName;
            $insData->email = $req->uEmail;
            $insData->save();
          return redirect('order');
        
    }

    public function selectData(){
        $allUsers = new order();
        $allUsersData = $allUsers::all();
        return view('selectUsers',compact('allUsersData'));
    }
  
}
