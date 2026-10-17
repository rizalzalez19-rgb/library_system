<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            $this->rules(),
            $this->messages()
        );

        Book::create($validated);

        return redirect()
            ->route('books.index')
            ->with('success', 'Data buku berhasil ditambahkan.');
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $validated = $request->validate(
            $this->rules($book),
            $this->messages()
        );

        $book->update($validated);

        return redirect()
            ->route('books.index')
            ->with('success', 'Data buku berhasil diperbarui.');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()
            ->route('books.index')
            ->with('success', 'Data buku berhasil dihapus.');
    }

    private function rules(?Book $book = null): array
    {
        return [
            'title' => [
                'required',
                'string',
                'min:3',
                'max:255',
                Rule::unique('books', 'title')->ignore($book?->id),
            ],
            'author' => [
                'required',
                'string',
                'min:3',
                'max:255',
                "regex:/^[\pL\s.,'\-]+$/u",
            ],
            'year' => [
                'required',
                'integer',
                'min:1900',
                'max:' . date('Y'),
            ],
            'stock' => [
                'required',
                'integer',
                'min:0',
                'max:1000',
            ],
        ];
    }

    private function messages(): array
    {
        return [
            'title.required' => 'Judul buku wajib diisi.',
            'title.string'   => 'Judul buku harus berupa teks.',
            'title.min'      => 'Judul buku minimal :min karakter.',
            'title.max'      => 'Judul buku maksimal :max karakter.',
            'title.unique'   => 'Judul buku sudah terdaftar.',

            'author.required' => 'Nama penulis wajib diisi.',
            'author.string'   => 'Nama penulis harus berupa teks.',
            'author.min'      => 'Nama penulis minimal :min karakter.',
            'author.max'      => 'Nama penulis maksimal :max karakter.',
            'author.regex'    => 'Nama penulis hanya boleh berisi huruf, spasi, titik, koma, apostrof, dan tanda hubung.',

            'year.required' => 'Tahun terbit wajib diisi.',
            'year.integer'  => 'Tahun terbit harus berupa bilangan bulat.',
            'year.min'      => 'Tahun terbit minimal :min.',
            'year.max'      => 'Tahun terbit maksimal :max (tahun sekarang).',

            'stock.required' => 'Stok wajib diisi.',
            'stock.integer'  => 'Stok harus berupa bilangan bulat.',
            'stock.min'      => 'Stok tidak boleh negatif.',
            'stock.max'      => 'Stok maksimal :max.',
        ];
    }
}