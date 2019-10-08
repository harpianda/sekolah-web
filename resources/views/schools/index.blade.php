@extends('layout.main')  

@section('title', 'Daftar Sekolah')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
            <h1 class="mt-3">Daftar Sekolah</h1>

            <a href="/schools/create" class="btn btn-primary my-3">Tambah Data Sekolah</a>
                
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

                <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Sekolah</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Provinsi</th>
                    <th scope="col">Kabupaten</th>
                    <th scope="col">Kecamatan</th>
                    <th scope="col">Kelurahan</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                
                
                    <tr>
                    @foreach ($schools as $school)
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{ $school->namasekolah}}</td>
                    <td>{{ $school->alamat}}</td>
                    <td>{{ $school->provinsi}}</td>
                    <td>{{ $school->kabupaten}}</td>
                    <td>{{ $school->kecamatan}}</td>
                    <td>{{ $school->kelurahan}}</td>
                    <td>{{ $school->jenis}}</td>
                    <td><a href="/schools/{{$school->id}}" class="btn btn-primary">Detail</a></td>
                    </tr>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>  
    </div>
@endsection