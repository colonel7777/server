<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class GetAuthorController extends Controller
{
    public function __invoke($id)
    {
        $author = DB::table('authors')->where('id', '=', $id )->get(['id', 'caption', 'alt_name']);
        $books = DB::table('books')->where('id_author', '=', $id )->get(['id', 'caption', 'alt_name']);

//        dd($books);
        //dd($author[0]->caption);
        return view('author_page',[
            'caption' =>$author[0]->caption
        ])->with('books',$books);
    }
}
