@extends('layouts.master')
@section('content')
<div class="container">
<h1>Create Warga</h1>

<form action="/warga/store" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="name" name="name" class="form-control" id="name" aria-describedby="nameHelp">
    </div>
    <div class="mb-3">
        <label for="nik" class="form-label">NIK</label>
        <input type="nik" name="nik" class="form-control" id="nik" aria-describedby="nikHelp">
    </div>
    <div class="mb-3">
        <label for="no_kk" class="form-label">NO.KK</label>
        <input type="no_kk" name="no_kk" class="form-control" id="no_kk" aria-describedby="no_kkHelp">
    </div>
    <div class="mb-3">
        <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
            <option selected>Pilih Jenis Kelamin</option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
    </div>
    <div class="form-floating">
        <textarea class="form-control" name="alamat" placeholder="Alamat" id="floatingTextarea"></textarea>
        <label for="floatingTextarea">Alamat</label>
    </div>
    <div class="mt-3">
        <input class="btn btn-primary" type="submit" name="submit" value="Save">
    </div>
</form>
</div>
@endsection