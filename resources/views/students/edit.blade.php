@extends('layout.main')

@section('title','Halaman Mahasiswa')


@section('container')
<div class="container">
    <div class="row">
            <div class="col-7">
                 <h1 class="mt-3">Tambah Data Mahasiswa</h1>

                 <form method='post' action="{{ route('students.update',$student->id) }}">
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                          <label for="nama">NAma</label>
                          <input type="text" class="form-control @error('nama') is-invalid @enderror"
                          id="nama" name='nama' placeholder="Masukkan Nama" value="{{ $student->nama }}">
                          <div class="invalid-feedback">
                                Kolom Nama Harus di Isi
                              </div>
                        </div>

                        <div class="form-group">
                          <label for="nrp">NRP</label>
                          <input type="text" class="form-control" id="nrp" name='nrp'
                          placeholder="Masukkan nrp" value="{{ $student->nrp }}">
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="text" class="form-control" id="email" name='email'
                          placeholder="Masukkan email" value="{{ $student->email }}">
                        </div>
                        <div class="form-group">
                          <label for="jurusan">Jurusan</label>
                          <input type="text" class="form-control" id="jurusan" name='jurusan'
                          placeholder="Masukkan jurusan" value="{{ $student->jurusan }}">
                        </div>

                        <button type='submit' class= 'btn btn-primary'>Submit</button>
                      </form>

            </div>
        </div>
    </div>
@endsection
