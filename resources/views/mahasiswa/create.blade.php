@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card mt-3">
            <div class="card-header">Input Data Mahasiswa</div>

            <div class="card-body">
              <form action="{{ route('simpan.mahasiswa') }}" method="post" class="form-item">
                @csrf
                <div class="form-group mb-3">
                  <label for="user_id">User ID</label>
                  <input type="text" name="user_id" class="form-control col-md-12 mt-1" placeholder="Masukkan User ID" />
                </div>
                <div class="form-group mb-3">
                  <label for="npm">NPM</label>
                  <input type="number" name="npm" class="form-control col-md-12 mt-1" placeholder="Masukkan NPM" />
                </div>
                <div class="form-group mb-3">
                  <label for="tgl_lahir">Tanggal Lahir</label>
                  <input type="date" name="tgl_lahir" class="form-control col-md-12 mt-1" placeholder="Masukkan Tanggal Lahir" />
                </div>
                <div class="form-group mb-3">
                  <label for="tempat_lahir">Tempat Lahir</label>
                  <input type="text" name="tempat_lahir" class="form-control col-md-12 mt-1" placeholder="Masukkan Tempat Lahir" />
                </div>
                <div class="form-group mb-3">
                  <label for="alamat">Alamat</label>
                  <input type="text" name="alamat" class="form-control col-md-12 mt-1" placeholder="Masukkan Alamat" />
                </div>
                <div class="form-group mb-3">
                  <label for="telpon">Telpon</label>
                  <input type="text" name="telpon" class="form-control col-md-12 mt-1" placeholder="Masukkan Telpon" />
                </div>
                <div class="form-group mb-3">
                  <label for="gender">Gender</label>
                  <br>
                  <input type="radio" value="L" name="gender"> Laki-Laki
                  <br>
                  <input type="radio" value="P" name="gender"> Perempuan
                </div>
                <button type="submit" class="btn btn-primary me-2">Simpan</button>
                <a href="{{ route('mahasiswa') }}" class="btn btn-danger">Batal</a>
              </form>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
