<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
class BookController extends Controller
{
    //
    function index(){
    	$books = Book::paginate(5);

    	return view('book.index',['books'=>$books]);
    }
}
