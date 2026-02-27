<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\Response;
//use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
//use App\Http\Controllers\Auth;
//use \Auth;

class LoginController extends Controller
{

   public function login(Request $login)
  {
   $v = $login->validate([
   'email'=>'required|email',
   'password'=>'required'
   ]);

     return redirect('/');
//return dd( AuthorizesRequests::email($login));

  }


}
