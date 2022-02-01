<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
    //
    function login(request $req)
    {
        $User= User::where(['email'=>$req->email])->first();
        
        if( !$User || Hash::check($req->password,$User->password))
        {
            return'Username or Password is not matched';
        }
        else{
            $req->session()->put('User',$User);
            return redirect('/');
        }
    }
}
