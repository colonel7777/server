<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use Illuminate\Support\Facades\DB;


class BooksController extends Controller
{

   public function __invoke($id, $alt_name )
  {

      $books = DB::table('books')->where('id', '=', $id )->get();
      $author = DB::table('authors')->where('id', '=', $books[0]->id_author )->get();

//-------- dir read file
 $dir_kk = preg_split("/[\/]+/", $books[0]->file);
 $dir_read_file = "https://bookstock.e-libra.ru/files/books/".$dir_kk['0']."/".$dir_kk['1']."/".$dir_kk['2']."/".$books[0]->id."/";
//--------------------------- photo
       if(is_file($dir_read_file.$books[0]->picture))
           $picture = $dir_read_file.$books[0]->picture;
       else $picture ='/libra8/default_book.3.png';
//--------------------------

       $data = [
       'author_name' =>$author[0]->caption,
       'author_id' =>$author[0]->id,
       'author_alt_name' =>$author[0]->alt_name,
       'caption' =>$books[0]->caption,
       'picture' =>$picture,
       'content' =>$books[0]->content,
       'alt_name' =>$books[0]->alt_name,
       'id' =>$books[0]->id
       ];

       return view('books_page')->with($data);

  }

}
