@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('warga') }}</div>

                <div class="card-body">
                    <div class="container">
                        <a class="btn btn-primary" href="/warga/create">Create</a>
                        <table class="table table-hover">
                            <tr>
                                <td>No</td>
                                <td>Nama</td>
                                <td>NIK</td>
                                <td>NO.KK</td>
                                <td>Jenis Kelamin</td>
                                <td>Alamat</td>
                                <td>AKSI</td>
                            </tr>
                            @foreach ($warga as $w)
                            <tr>
                                <td>{{ $w->id }}</td>
                                <td>{{ $w->name }}</td>
                                <td>{{ $w->nik }}</td>
                                <td>{{ $w->no_kk }}</td>
                                <td>{{ $w->jenis_kelamin }}</td>
                                <td>{{ $w->alamat }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-warning" href="/warga/{{ $w->id }}/edit">Edit</a>
                                        <form action="/warga/{{ $w->id }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <input class="btn btn-danger" type="submit" value="Delete">
                                        </form>
                                    </div>
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
