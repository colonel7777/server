<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Author;
//use Illuminate\Http\Request;

class GetAlphabetController extends Controller
{
   public function __invoke($alphabet)
   {

       $author = DB::table('authors')->where('caption', 'like', $alphabet . '%')->get(['id', 'caption', 'alt_name']);
//       $aur = $author->toArray();

//       $out = "<ul>";

//       for($i=0;$i<count($aur);$i++)
//           $out .= "<li><a href=\"/author/".$author[$i]->id."-".$author[$i]->alt_name."html\" /> ".$author[$i]->caption."</a></li>";

//       $out .= "</ul>";

//       dd($out);
       return view('alphabet')->with('data', $author);

   }
}
