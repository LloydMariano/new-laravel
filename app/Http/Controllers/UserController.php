<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    function home(Reques $req)
    {
        return User::where(['email'=>$req->email])->first();
        if($user || Hash::check($req->password, $user->$password))
        {
            return "Username or password is not match";
        }
        else{
            return redirect('home');
        }
    }
}
