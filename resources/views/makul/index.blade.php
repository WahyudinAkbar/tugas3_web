@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Mahasiswa
                  <a href="{{ route("tambah.makul") }}" class="btn btn-primary btn-md float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <tr>
                          <th>NO.</th>
                          <th>KODE MAKUL</th>
                          <th>NAMA MAKUL</th>
                          <th>SKS</th>
                          <th>AKSI</th>
                        </tr>
                        @foreach ($makul as $mkl)
                            <tr>
                              <td>{{ $mkl->id }}</td>
                              <td>{{ $mkl->kd_makul }}</td>
                              <td>{{ $mkl->nama_makul }}</td>
                              <td>{{ $mkl->sks }}</td>
                              <td>
                                <a href="{{ route('edit.makul', $mkl->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <a href="{{ route('hapus.makul', $mkl->id) }}" class="btn btn-sm btn-danger">Hapus</a>
                              </td>
                            </tr>
                        @endforeach
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
