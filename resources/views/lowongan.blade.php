@extends('dashboard')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOWONGAN | Data lowongan</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="style.css">
    <style>

    </style>
</head>
<body>
<a href="{{ url('lowongan/add') }}" class="btn btn-primary plus float-right mt-4 btn-sm"><i class="bi bi-person-plus"></i> Add Lowongan </a>
<div class="card border-light mt-5">
        <div class="card-header bg-primary text-white">Data Lowongan</div>
        <div class="card-body ">
        <div class="col-md-12">
            <table class="table table-hover table-striped table-bordered text-center">
                <tr>
                    <th>NO</th>
                    <th>NIS</th>
                    <th>PERUSAHAAN</th>
                    <th>JUDUL</th>
                    <th>DESKRIPSI</th>
                    <th>TANGGAL</th>
                    <th>STATUS</th>
                    <th>FOTO</th>
                    <th>ACTION</th>
                </tr>
                @foreach ($lowongan as $key => $item)
                <tr>
                    <td>{{ $key+1}}</td>
                    <td>{{ $item -> nis }}</td>
                    <td>{{ $item -> id_perusahaan }}</td>
                    <td>{{ $item -> judul }}</td>
                    <td>{{ $item -> deskripsi }}</td>
                    <td>{{ $item -> tanggal }}</td>
                    <td>{{$item -> status}}</td>
                    <td>
                        <img src="/storage/{{ $item -> foto }}" alt=""width="100">
                    </td>
                    
                    <td>
                        <a href="lowongan/edit/{{ $item->id_loker }}" class="btn btn-success btn-sm"><i class="bi bi-pencil-fill"></i></a>
                        <a href="lowongan/delete/{{ $item->id_loker }}" class="btn btn-danger btn-sm" onclick="return window.confirm('Hapus Data Ini ?')">
                            <i class="bi bi-trash"></i>
                        </a>
                        {{-- <a href="kas/{{ $item->id }}" class="btn btn-info btn-sm"><i class="bi bi-search"></i></a>--}}
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        </div>
    </div>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
@endsection


