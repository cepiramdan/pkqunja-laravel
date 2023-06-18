@extends('crudbooster::admin_template')
@section('content')

<style>
    .table {
        background-color: white;
        border: 1px solid black;
    }
    
    .table th, .table td, .table tr{
        border: 1px solid black;
    }
</style>

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Nim</th>
                <th>Tanggal</th>
                <th>Waktu Mulai</th>
                <th>Surah Mulai</th>
                <th>Ayat Mulai</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ngaji as $row)
            <tr>
                <td>{{ $row->nim}}</td>
                <td>{{ $row->tanggal}}</td>
                <td>{{ $row->waktu_mulai}}</td>
                <td>{{ $row->surah_mulai}}</td>
                <td>{{ $row->ayat_mulai}}</td>
                <td>
                    <a href="" class="btn btn-sm btn-success">Edit</a>
                    <a href="" class="btn btn-sm btn-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection