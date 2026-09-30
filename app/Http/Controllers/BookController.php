<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            ['judul' => 'Pemrograman PHP', 'penulis' => 'Andi', 'tahun' => 2021],
            ['judul' => 'Laravel untuk Pemula', 'penulis' => 'Budi', 'tahun' => 2022],
            ['judul' => 'Basis Data Dasar', 'penulis' => 'Citra', 'tahun' => 2020],
            ['judul' => 'Algoritma Lanjut', 'penulis' => 'Dewi', 'tahun' => 2019],
            ['judul' => 'Sistem Informasi', 'penulis' => 'Eko', 'tahun' => 2023]
        ];

        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        return view('books.show', compact('id'));
    }
}