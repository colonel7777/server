<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class GetTasksAllController extends Controller
{

    public function __invoke()
    {

      $results = DB::table('tasks')->get();

      return view('index')->with('tasks',$results);

    }
}
