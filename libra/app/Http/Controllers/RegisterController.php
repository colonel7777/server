<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\Response;
//use App\Http\Requests\ValidateRequest;


class RegisterController extends Controller
{
   public function reg(Request $reg)
  {

//dd($reg);

   $validate = $reg->validate([
   'email'=>'required|email|unique:users',
   'password'=>'required|confirmed',
   'password_confirmation'=>'required'
   ]);

//dd($validate);

  $db = new User;
//    $user = User::where('email', $reg->input('email'))->get();
//    $ar = $user->toArray();
//    if($ar[0]['email']) dd('Такой email уже существует!');

//     return view('register',$ar);//$errors->any('email','Error!!!');


  $db->email = $reg->input('email');
  $db->password = $reg->input('password');
  $db->save();
     return redirect(route('/'));
//return dd($req);

  }


}
