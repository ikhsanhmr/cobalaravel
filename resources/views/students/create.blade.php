@extends('layout.main')

@section('title','Halaman Mahasiswa')


@section('container')
<div class="container">
    <div class="row">
            <div class="col-7">
                 <h1 class="mt-3">Tambah Data Mahasiswa</h1>

                 <form method='post' action="../students">
                    @csrf
                        <div class="form-group">
                          <label for="nama">NAma</label>
                          <input type="text" class="form-control @error('nama') is-invalid @enderror"
                          id="nama" name='nama' placeholder="Masukkan Nama" value="{{ old('nama') }}">
                          <div class="invalid-feedback">
                                Kolom Nama Harus di Isi
                              </div>
                        </div>

                        <div class="form-group">
                          <label for="nrp">NRP</label>
                          <input type="text" class="form-control @error('nrp') is-invalid @enderror"
                          id="nrp" name='nrp' placeholder="Masukkan nrp" value="{{ old('nrp') }}">
                            <div class="invalid-feedback">
                                Kolom NRP Harus 9 digit dan tidak boleh kosong
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name='email'
                          placeholder="Masukkan email" value="{{ old('email') }}">
                          <div class="invalid-feedback">
                            Kolom Email Harus di Isi
                        </div>
                        </div>
                        <div class="form-group">
                          <label for="jurusan">Jurusan</label>
                          <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name='jurusan'
                          placeholder="Masukkan jurusan" value="{{ old('jurusan') }}">
                          <div class="invalid-feedback">
                            Kolom Jurusan Harus di Isi
                        </div>
                        </div>

                        <button type='submit' class= 'btn btn-primary'>Submit</button>
                      </form>

            </div>
        </div>
    </div>
@endsection
