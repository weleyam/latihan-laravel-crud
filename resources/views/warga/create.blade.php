@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>CREATE WARGA</h1>

        <form action="/warga/store" method="POST">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="nama" placeholder="nama">
                <label for="floatingInput">Nama Warga</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="nik" placeholder="nik" >
                <label for="floatingInput">NIK</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="no_kk" placeholder="nomor kk">
                <label for="floatingInput">No. KK</label>
            </div>
            <select name="jenis_kelamin" class="form-select">
                <option value="" selected>Pilih Jenis Kelamin</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
            <br>
            <div class="form-floating mb-3">
                <textarea name="alamat" class="form-control" placeholder="Alamat" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Alamat</label>
            </div>
            <input type="submit" name="submit" value="save" class="btn btn-primary">
        </form>
    </div>
@endsection
