<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Tasks;

class EditTasksController extends Controller
{

    public function __invoke(Request $data)
    {

      $data->validate([
      'id'=>'required',
      'title'=>'required|max:255',
      'description'=>'required|max:255',
      'status'=>'required|max:255'
      ]);


      DB::table('tasks')->where('id', $data->id)->update([
       'title' => $data->title,
       'description' => $data->description,
       'status' => $data->status
      ]);

     return redirect('/');

    }
}
