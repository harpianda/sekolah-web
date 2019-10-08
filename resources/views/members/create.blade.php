@extends('layout.main')  

@section('title', 'Detail Member')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
            <h1 class="mt-3">Detail Member</h1>

        <form method="post" action="/members">
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama " name="nama" value="{{ old ('nama') }}">
            @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email " name="email" value="{{ old ('email') }}">
            @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control @error('password') is-invalid @enderror" id="email" placeholder="Masukkan Password " name="password" value="{{ old ('password') }}">
            @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
            </div>
        </div>  
    </div>
@endsection