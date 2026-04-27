<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('pages.users.users', compact('users'));
    }

    public function create()
    {
        return view('pages.users.create');
    }

    public function store(StoreUserRequest $request)
    {
        // membuat variabel untuk inputan yang sudah divalidasi oleh StoreUserRequest
        $data = $request->validated();
        User::create($data);
        return to_route('users.index')->with('success', 'Berhasil menambahkan user baru!');
    }

    public function edit($id) {
        // kalau find, jika user dengan id yg diminta tidak ditemukan, maka akan mengembalikan null
        // $user = User::find($id);

        // kalau findOrFail, jika user dengan id yg diminta tidak ditemukan, makan akan mengembalikan error halaman 404
        $user = User::findOrFail($id);
        return view('pages.users.edit', compact('user'));
    }

    public function update($id, UpdateUserRequest $request) {
        // dd($request->all());
    }
}
