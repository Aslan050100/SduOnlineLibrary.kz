<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
class SearchController extends Controller
{
    //
    public function search(Request $request){
    	$search = $request->input('bookname');
    	$book = Book::where('name','like','%'.$search.'%')->first();
    	if(is_null($book)){
    		return redirect()->back();
    	}
    	return view('book.search',['book'=>$book]);
    }
}
