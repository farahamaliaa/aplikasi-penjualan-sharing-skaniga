@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit User</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('users.update', $user->id) }}" method="POST">
                {{-- csrf token --}}
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-6 ">
                        <label for="name">Nama</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" class="form-control" value="{{ $user->email }}">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-6 mt-3">
                        <label for="phone_number">Nomor Telepon</label>
                        <input type="text" id="phone_number" name="phone_number" class="form-control" value="{{ $user->phone_number }}">
                        @error('phone_number')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- <div class="col-6 mt-3">
                        <label for="password">Password</label>
                        <input type="text" id="password" name="password" class="form-control">
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div> --}}
                </div>
                <div class="text-end mt-4">
                    <a href="{{ route('users.index') }}" class="btn btn-outline-warning">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
