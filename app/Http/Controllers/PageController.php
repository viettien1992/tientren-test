<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index(){
        $b = new Book();
        $books = $b->getAll();
        return view('welcome',compact('books'));
    }
}
