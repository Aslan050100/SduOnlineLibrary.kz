<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class FileDownloadController extends Controller
{
    //
    function download($id){
    	$df = Book::find($id);
    	return response()->download(public_path('files/'.$df->file));
    }
    
}
