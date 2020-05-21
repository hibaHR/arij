<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class ProfileController extends Controller
{
    public function getEditprofil($id)
    {

        $user= User::find($id);
        return view('admin.edit', ['user' => $user]);
    }

    public function getupdateprofil( Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,'.Auth::id()
        ]);
        $user = User::find(Auth::id());
        $user->name= $request->input('name');
        $user->email= $request->input('email');

        $user->save();
        Flash::message('Your account has been updated!');

}
}
