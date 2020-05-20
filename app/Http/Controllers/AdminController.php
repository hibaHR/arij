<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    //public function registered()
    public function allusers()
    
    {
     $users = User::all();
    return view('admin.allusers',['users' => $users]);
    }
    public function getAdminEdit(Request $request ,$id)
    {
      $users = User::findOrfail($id);
      return view('admin.user-edit')->with('users',$users);;
    }

    public function postAdminUpdate(Request $request ,$id)
   {
    $users = User::find($id);
    $users->name = $request->input('username');
    $users->user_type= $request->input('user_type');
    $users->update();
    return redirect('/allusers')->with('status','Your Data is updated');
    }
    public function registerdelete($id)
    {
        
        
        
        
     $users = User::findOrFail($id);
     $users->delete();
     return redirect('/role-register')->with('status','Your Data is deleted');

    }
}
