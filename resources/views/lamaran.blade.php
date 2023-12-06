@extends('dashboard')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAMARAN | Data Lamaran</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="style.css">
    <style>

    </style>
</head>
<body>
<a href="{{ url('lamaran/add') }}" class="btn btn-primary plus float-right mt-4 btn-sm"><i class="bi bi-person-plus"></i> Add Lamaran </a>
<div class="card border-light mt-5">
        <div class="card-header bg-primary text-white">Data Lamaran</div>
        <div class="card-body ">
        <div class="col-md-12">
            <table class="table table-hover table-striped table-bordered text-center">
                <tr>
                    <th>NO</th>
                    <th>NISN</th>
                    <th>NAMA</th>
                    <th>JENIS KELAMIN</th>
                    <th>JURUSAN</th>
                    <th>TANGGAL LAHIR</th>
                    <th>ALAMAT</th>
                    <th>TELEPON</th>
                    <th>TAHUN AJARAN</th>
                    <th>FOTO</th>
                    <th>ACTION</th>
                </tr>
                @foreach ($lamaran as $key => $item)
                <tr>
                    <td>{{ $key+1}}</td>
                    <td>{{ $item -> nis }}</td>
                    <td>{{ $item -> nama }}</td>
                    <td>{{ $item -> jk=='Laki-laki'?'Laki-laki':'Perempuan' }}</td>
                    <td>{{ $item -> jurusan }}</td>
                    <td>{{ $item -> tgl_lahir }}</td>
                    <td>{{ $item -> alamat }}</td>
                    <td>{{ $item -> telepon }}</td>
                    <td>{{ $item -> tahun_ajaran }}</td>
                    <td>
                        <img src="/storage/{{ $item -> foto }}" alt=""width="100">
                    </td>
                    <td>
                        <a href="lamaran/edit/{{ $item->id }}" class="btn btn-success btn-sm"><i class="bi bi-pencil-fill"></i></a>
                        <a href="lamaran/delete/{{ $item->id }}" class="btn btn-danger btn-sm" onclick="return window.confirm('Hapus Data Ini ?')">
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