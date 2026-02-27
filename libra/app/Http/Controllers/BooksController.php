<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;


class BooksController extends Controller
{

   public function __invoke($id, $alt_name )
  {


    $books = Book::where('id', $id)->get();
//    $books = Book::where('id', $id)->toArray();

    $ar_books = $books->toArray();
//   dd($ar_books[0]['parser']);

    $author = Author::where('id', $ar_books[0]['id_author'])->get();
//-------- dir read file
 $dir_kk = preg_split("/[\/]+/", $ar_books[0]["file"]);
 $dir_read_file = "https://bookstock.e-libra.ru/files/books/".$dir_kk['0']."/".$dir_kk['1']."/".$dir_kk['2']."/".$ar_books[0]['id']."/";
 $dir_read_file_r = "/archive/files/books/".$dir_kk['0']."/".$dir_kk['1']."/".$dir_kk['2']."/".$ar_books[0]['id']."/txt.html";
 $dir_read_file_http = "/archive/files/books/".$dir_kk['0']."/".$dir_kk['1']."/".$dir_kk['2']."/".$ar_books[0]['id']."/";

//   dd($author);
     return view('books_page',[
       'author' =>$author[0]['caption'],
       'caption' =>$ar_books[0]['caption'],
       'picture' =>$dir_read_file.$ar_books[0]['picture'],
       'content' =>$ar_books[0]['content'],
       'alt_name' =>$ar_books[0]['alt_name'],
       'id' =>$ar_books[0]['id']


     ]);


  }

}
