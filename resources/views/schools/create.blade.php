@extends('layout.main')  

@section('title', 'Detail Member')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
            <h1 class="mt-3">Data Sekolah</h1>

        <form method="post" action="/schools">
        @csrf
        <div class="form-group">
            <label for="npsn">Kode Sekolah</label>
            <input type="text" class="form-control @error('npsn') is-invalid @enderror" id="npsn" placeholder="Masukkan Kode Sekolah " name="npsn" value="{{ old ('npsn') }}">
            @error('npsn')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
            <label for="namasekolah">Nama Sekolah</label>
            <input type="text" class="form-control @error('namasekolah') is-invalid @enderror" id="namasekolah" placeholder="Masukkan Nama Sekolah " name="namasekolah" value="{{ old ('namasekolah') }}">
            @error('namasekolah')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="email" placeholder="Masukkan Alamat " name="alamat" value="{{ old ('alamat') }}">
            @error('alamat')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
            <label for="provinsi">Provinsi</label>
            <input type="text" class="form-control @error('provinsi') is-invalid @enderror" id="email" placeholder="Masukkan Provinsi " name="provinsi" value="{{ old ('provinsi') }}">
            @error('provinsi')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
            <label for="kabupaten">Kabupaten</label>
            <input type="text" class="form-control @error('kabupaten') is-invalid @enderror" id="email" placeholder="Masukkan Kabupaten " name="kabupaten" value="{{ old ('kabupaten') }}">
            @error('kabupaten')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
            <label for="kecamatan">Kecamatan</label>
            <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" id="email" placeholder="Masukkan Kecamatan " name="kecamatan" value="{{ old ('kecamatan') }}">
            @error('kecamatan')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
            <label for="kelurahan">Kelurahan</label>
            <input type="text" class="form-control @error('kelurahan') is-invalid @enderror" id="email" placeholder="Masukkan Kelurahan " name="kelurahan" value="{{ old ('kelurahan') }}">
            @error('kelurahan')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
            <label for="jenis">Jenis Sekolah</label>
            <input type="text" class="form-control @error('kelurahan') is-invalid @enderror" id="email" placeholder="Masukkan Jenis Sekolah " name="jenis" value="{{ old ('jenis') }}">
            @error('jenis')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        {{-- <div class="form-group">
        <label for="jenis">Jenis Sekolah</label>
            <select class="custom-select" required>
            <option value="">Pilih Jenis Sekolah</option>
            <option id="jenis" value="{{'Negri'}}">Negri</option>
            <option id="jenis "value="{{'Swasta'}}">Swasta</option>
            </select>
            <div class="invalid-feedback">Example invalid custom select feedback</div>
        </div> --}}
        <div class="form-group">
            <label for="emailmember">Email</label>
            <input type="text" class="form-control @error('emailmember') is-invalid @enderror" id="emailmember" placeholder="Masukkan Email " name="emailmember" value="{{ old ('emailmember') }}">
            @error('emailmember')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
            </div>
        </div>  
    </div>
@endsection