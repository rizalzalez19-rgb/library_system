<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            ['title' => 'Membangun Web dengan Laravel dan MySQL',       'author' => 'Budi Raharjo',  'year' => 2024, 'stock' => 15],
            ['title' => 'Panduan SOC Analyst dan Cyber Defense',        'author' => 'Eko Kurniawan', 'year' => 2025, 'stock' => 10],
            ['title' => 'Arsitektur Data Warehouse dan Star Schema',    'author' => 'Jogiyanto',     'year' => 2023, 'stock' => 8],
            ['title' => 'Implementasi ERP Odoo untuk Bisnis',           'author' => 'Abdul Kadir',   'year' => 2026, 'stock' => 20],
            ['title' => 'Fundamental Jaringan dengan MikroTik & Cisco', 'author' => 'Iwan Sofana',   'year' => 2024, 'stock' => 12],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}