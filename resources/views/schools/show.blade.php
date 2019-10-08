@extends('layout.main')  

@section('title', 'Detail Sekolah')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
            <h1 class="mt-3">Detail Sekolah</h1>

        <ul class="list-group">
        <li class="list-group-item">{{$school->namasekolah}}</li>
        <li class="list-group-item">{{$school->alamat}}</li>
        <li class="list-group-item">{{$school->provinsi}}</li>
        <li class="list-group-item">{{$school->kabupaten}}</li>
        <li class="list-group-item">{{$school->kecamatan}}</li>
        <li class="list-group-item">{{$school->kelurahan}}</li>
        <li class="list-group-item">{{$school->jenis}}</li>
        <li class="list-group-item">{{$school->emailmember}}</li>
        </ul>
            <a href="{{ $school->id }}/edit" class="btn btn-primary">Edit</a>

            <form action="/schools/{{ $school->id }}" method="post" class="d-inline">
            @method('delete')
            @csrf
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
            <a href="/schools"class="card-link">Kembali</a>
            </div>
        </div>  
    </div>
@endsection