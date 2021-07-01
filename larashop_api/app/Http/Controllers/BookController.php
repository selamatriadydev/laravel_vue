<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Http\Resources\Book as BookResource;//untuk resource api tunggal
use App\Http\Resources\BookCollection as BookCollectionResource;//untuk resource api non-tunggal
class BookController extends Controller
{
    public function index()
    {
        //query builder
        // $books = DB::select('select * from books');
        // return $books;
        //eloquent
        $books = new BookCollectionResource(Book::get());
        return $books;
    }
    public function view($id)
    {
        //query builder
        // $book = DB::select('select * from books where id = :id', ['id' => $id]);
        // return $book;
        //eloquent
        $book = new BookResource(Book::find($id));
        return $book;
    }
    public function cetak($judul)
    {
        return $judul;
    }

}
