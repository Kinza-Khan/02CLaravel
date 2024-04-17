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

            $req->validate([
                'Name'=>'required',
                'Email'=>'required'
            ]);
            $insData = new order();
            $insData->name = $req->Name;
            $insData->email = $req->Email;
            $insData->save();
          return redirect('select2');
    }
    public function selectData(){
        // $allUsers = new order();
        $allUsersData = order::all();
        return view('selectUsers',compact('allUsersData'));
    }
    // // show 
    public function showData($uId){
            $selectData = order::find($uId);
            return view('edit',compact('selectData'));
    }
    // update
    public function updateData(Request $req , $id){
            $userData = order::find($id);
            $userData->name = $req->Name;
            $userData->email = $req->Email;
            $userData->save();
            return redirect('select2');

    }
  
}
