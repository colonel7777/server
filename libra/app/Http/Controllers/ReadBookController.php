<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;


class ReadBookController extends Controller
{

   public function __invoke($id)
  {

 //echo $id;

    $books = Book::where('id', $id)->get();
    $ar_books = $books->toArray();
//-------- dir read file
 $dir_kk = preg_split("/[\/]+/", $ar_books[0]["file"]);
 $dir_read_file = "https://bookstock.e-libra.ru/files/books/".$dir_kk['0']."/".$dir_kk['1']."/".$dir_kk['2']."/".$ar_books[0]['id']."/";
 $dir_read_file_r = "/archive/files/books/".$dir_kk['0']."/".$dir_kk['1']."/".$dir_kk['2']."/".$ar_books[0]['id']."/txt.html";
 $dir_read_file_http = "/archive/files/books/".$dir_kk['0']."/".$dir_kk['1']."/".$dir_kk['2']."/".$ar_books[0]['id']."/";

//	return @file_get_contents( $filename );
  $read_text = file_get_contents( $dir_read_file_r);
  $content =  str_replace("<img src='/templates/libra/images/plus.png' alt='Сделать закладку на этом месте книги' title='Сделать закладку на этом месте книги' />","",$read_text);

     return view('read_page',[
       'caption' =>$ar_books[0]['caption'],
       'picture' =>$dir_read_file.$ar_books[0]['picture'],
       'content' =>$content,
       'alt_name' =>$ar_books[0]['alt_name'],
       'id' =>$ar_books[0]['id']


     ]);


  }
}
