<?php

namespace App\Http\Controllers;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Http\Request;
use App\Book;
class AddBook2Controller extends Controller
{
    //
    public function addBook(Request $request){

    	
    	$name = $request->input('name');
    	if($file = $request->file('file')){
    		$nameBook = $file->getClientOriginalName();
    		if($file->storePubliclyAs('files',$nameBook,'public')){
    			$book = new Book();
    			$book->file = $nameBook;
    			$book->name = $name;
    			$book->save();
    			return redirect()->route('book.index');
    		};
    	}
    	return redirect()->back();
    }
}
