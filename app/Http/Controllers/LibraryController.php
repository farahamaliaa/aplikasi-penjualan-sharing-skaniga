<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function tampil()
    {
        $books = [
            'PHP dasar untuk pemula',
            'Seporsi mie ayam sebelum mati',
            'Filosofi teras',
            'Is it bad or good habbit',
            'Si kancil pencuri timun'
        ];

        return view('list-buku', compact('books'));
    }
}
