@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit Warga</h1>

    <form action="/warga/{{ $warga->id }}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" value="{{ $warga->name }}" id="name" aria-describedby="nameHelp">
        </div>
        <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" name="nik" class="form-control" value="{{ $warga->nik }}" id="nik" aria-describedby="nikHelp">
        </div>
        <div class="mb-3">
            <label for="no_kk" class="form-label">NO.KK</label>
            <input type="text" name="no_kk" class="form-control" value="{{ $warga->no_kk }}" id="no_kk" aria-describedby="no_kkHelp">
        </div>
        <div class="mb-3">
            <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                <option selected>Pilih Jenis Kelamin</option>
                <option value="L" @if($warga->jenis_kelamin == "L") selected @endif>Laki-laki</option>
                <option value="P" @if($warga->jenis_kelamin == "P") selected @endif>Perempuan</option>
            </select>
        </div>
        <div class="form-floating">
            <textarea class="form-control" name="alamat" placeholder="Alamat" id="floatingTextarea">{{ $warga->alamat }}</textarea>
            <label for="floatingTextarea">Alamat</label>
        </div>
        <div class="mt-3">
            <input class="btn btn-primary" type="submit" name="submit" value="Save">
        </div>
    </form>
</div>
@endsection