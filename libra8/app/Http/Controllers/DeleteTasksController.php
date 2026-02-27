<?php

namespace App\Http\Controllers;
use App\Models\Tasks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteTasksController extends Controller
{

    public function __invoke( $id)
    {

    Tasks::where('id', $id)->delete();

     return redirect('/');
    }
}
