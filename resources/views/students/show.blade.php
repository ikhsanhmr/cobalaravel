@extends('layout.main')

@section('title','Halaman Mahasiswa')


@section('container')
<div class="container">
    <div class="row">
            <div class="col-6">
                 <h1 class="mt-3">Detail Mahasiswa</h1>

                 <div class="card" >
                        <div class="card-body">
                          <h5 class="card-title">{{ $student->id }}</h5>
                          <h6 class="card-subtitle mb-2 text-muted">{{ $student->nama }}</h6>
                          <p class="card-text">{{ $student->nrp }}</p>
                          <p class="card-text">{{ $student->email }}</p>
                          <p class="card-text">{{ $student->jurusan }}</p>


                          <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>


                            <form action="{{ route('students.destroy',$student->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type='submit' class= 'btn btn-danger'>delete</button>
                            </form>
                            <a href="../students" class="card-link">Kembali</a>
                        </div>
                      </div>

            </div>
        </div>
    </div>
@endsection
