@extends('layout.main')

@section('title','Halaman Mahasiswa')


@section('container')
<div class="container">
    <div class="row">
            <div class="col-6">
                 <h1 class="mt-3">Daftar Mahasiswa</h1>

                 <a href="students/create" class="btn btn-primary my-3">Tambah Data</a>

                 @if (session('status'))
                 <div class="alert alert-success">
                     {{ session('status') }}
                 </div>
             @endif

                 <ul class="list-group">
                        @foreach ($student as $mhs)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                         {{ $mhs->nama}}
                          <a href="students/{{ $mhs->id}}" class="badge badge-info">Detail</a>
                        </li>
                        @endforeach
                      </ul>

            </div>
        </div>
    </div>
@endsection
