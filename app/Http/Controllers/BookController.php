<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            ['id' => 1, 'title' => 'Pemrograman PHP',      'author' => 'Andi',  'year' => 2021],
            ['id' => 2, 'title' => 'Laravel untuk Pemula', 'author' => 'Budi',  'year' => 2022],
            ['id' => 3, 'title' => 'Basis Data Dasar',     'author' => 'Citra', 'year' => 2020],
            ['id' => 4, 'title' => 'Algoritma Lanjut',     'author' => 'Dewi',  'year' => 2019],
            ['id' => 5, 'title' => 'Sistem Informasi',     'author' => 'Eko',   'year' => 2023],
        ];

        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        $stock = 7;

        return view('books.show', compact('id', 'stock'));
    }
}