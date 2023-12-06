@extends('dashboard')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERUSAHAAN | Data Perusahaan</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="style.css">
    <style>

    </style>
</head>
<body>
<a href="{{ url('perusahaan/add') }}" class="btn btn-primary plus float-right mt-4 btn-sm"><i class="bi bi-person-plus"></i> Add Perusahaan </a>
<div class="card border-light mt-5">
        <div class="card-header bg-primary text-white">Data Perusahaan</div>
        <div class="card-body ">
        <div class="col-md-12">
            <table class="table table-hover table-striped table-bordered text-center">
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>TELEPON</th>
                    <th>ALAMAT</th>
                    <th>FOTO</th>
                    <th>ACTION</th>
                </tr>
                @foreach ($perusahaan as $key => $item)
                <tr>
                    <td>{{ $key+1}}</td>
                    <td>{{ $item -> nama }}</td>
                    <td>{{ $item -> telepon }}</td>
                    <td>{{ $item -> alamat }}</td>
                    <td>
                        <img src="/storage/{{ $item -> foto }}" alt=""width="100">
                    </td>
                    
                    <td>
                        <a href="perusahaan/edit/{{ $item->id_perusahaan }}" class="btn btn-success btn-sm"><i class="bi bi-pencil-fill"></i></a>
                        <a href="perusahaan/delete/{{ $item->id_perusahaan }}" class="btn btn-danger btn-sm" onclick="return window.confirm('Hapus Data Ini ?')">
                            <i class="bi bi-trash"></i>
                        </a>
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


