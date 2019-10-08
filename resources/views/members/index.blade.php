@extends('layout.main')  

@section('title', 'Daftar Member')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
            <h1 class="mt-3">Daftar Member</h1>

            <a href="/members/create" class="btn btn-primary my-3">Tambah Data Member</a>
                
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

                <ul class="list-group">             
                @foreach ($members as $member)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$member->nama}}
                    <a href="/members/{{$member->id}}" class="badge badge-info">Detail</a>
                </li>
            @endforeach
                </ul>

            </div>
        </div>  
    </div>
@endsection