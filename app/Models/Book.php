<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Book extends Model
{
    // kết nối book voi bang trong sql
    protected $table='book1';

    function getAll(){
        $book= DB::table('book1')
            ->select('*')
            ->get();
       return $book;
    }
    function getBookById($id){
        $bookId=DB::table('book1')
            ->where('id','=',$id)
            ->get();
        return $bookId;
    }
    function getAllBook(){
        return DB::table('book1')->count();
    }
    function getLimit($page,$limit){
        $book= DB::table('book1')
            ->select('*')
            ->offset($limit*($page-1))
            ->limit($limit)
            ->orderBy('id', 'DESC')
            ->get();
        return $book;
    }
}
