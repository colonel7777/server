<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Tasks;

class EditFormTasksController extends Controller
{

    public function __invoke($id)
    {
//    $data = DB::table('tasks')->where('id', $id)->get();//->toArray();
    $data = Tasks::where('id', $id)->get();//->toArray();
//    $data = $data->toArray();
    foreach ($data as $tasks)

//  dd($tasks->title);
      return view('edittasks')->with('tasks',$tasks);
    }
}

