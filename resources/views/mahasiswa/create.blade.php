@extends('layouts.main')
@push('css')
@section('content')
    <div class="container">
    <div class="card mt-4 mb-4">
        <div class="card-header">
            Tambah Data
        </div>
            <div class="card-body justify-content-between">
             <form action="{{Route('mahasiswa.store')}}" method="post" enctype="multipart/form-data">
             @csrf
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <select name="jurusan" id="" class="form-control">
                    <option value="">- Pilih -</option>
                    <option value="TI">TI</option>
                    <option value="SI">SI</option>
                </select>
                @error('jurusan')
                 <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="npm" class="form-label">NPM</label>
                <input type="text" class="form-control" name="npm" placeholder="Masukkan NPM">
                @error('npm')
                 <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
                @error('nama')
                 <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir">
                @error('tanggal_lahir')
                 <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <div class="input-group">
              <input type="file" class="form-control" name="foto">
              <label class="input-group-text" for="foto">Upload</label>
              @error('foto')
                 <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            </div>

            <div>
                <button type="submit" class="btn btn-success">Tambah</button>
                <a type="button" class="btn btn-warning" href="{{Route('mahasiswa.index')}}">Kembali</a>
            </div>
    </div>
</div>
@endsection
