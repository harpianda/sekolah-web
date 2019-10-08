@extends('layout.main')  

@section('title', 'Detail Member')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
            <h1 class="mt-3">Detail Member</h1>

        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$member->nama}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$member->email}}</h6>
            <p class="card-text">{{$member->password}}</p>

            <a href="{{ $member->id }}/edit" class="btn btn-primary">Edit</a>

            <form action="/members/{{ $member->id }}" method="post" class="d-inline">
            @method('delete')
            @csrf
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
            <a href="/members"class="card-link">Kembali</a>
        </div>
        </div>
            </div>
        </div>  
    </div>
@endsection