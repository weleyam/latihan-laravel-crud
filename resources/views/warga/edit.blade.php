@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>EDIT WARGA</h1>
        <form action="/warga/{{ $warga->id }}" method="POST">
            @method('put')
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="nama" placeholder="nama" value="{{ $warga->nama }}">
                <label for="floatingInput">Nama Warga</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="nik" placeholder="nik" value="{{ $warga->nik }}">
                <label for="floatingInput">NIK</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="no_kk" placeholder="nomor kk"
                    value="{{ $warga->no_kk }}">
                <label for="floatingInput">No. KK</label>
            </div>
            <select name="jenis_kelamin" class="form-select">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L" @if ($warga->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
                <option value="P" @if ($warga->jenis_kelamin == 'P') selected @endif>Perempuan</option>
            </select>
            <br>
            <div class="form-floating mb-3">
                <textarea name="alamat" class="form-control" placeholder="Alamat" id="floatingTextarea2" style="height: 100px">{{ $warga->alamat }}</textarea>
                <label for="floatingTextarea2">Alamat</label>
            </div>
            <input type="submit" name="submit" value="update" class="btn btn-primary">
        </form>
    </div>
@endsection
