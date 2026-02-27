<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AddTasksController extends Controller
{

    public function __invoke(Request $data)
    {

   $data->validate([
   'title'=>'required|max:255',
   'description'=>'required|max:255',
   'status'=>'required|max:255'
   ]);

DB::insert("insert into tasks (title,description,status) values ('".$data['title']."','".$data['description']."','".$data['status']."')");

     return redirect('/');

//        return view('index');//->with('books',$books);


    }

}
