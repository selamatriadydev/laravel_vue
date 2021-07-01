<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = DB::select('select * from books');
        return $books;
    }
    public function cetak($judul)
    {
        return $judul;
    }

}
