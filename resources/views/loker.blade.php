<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dokument</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    </head>
    @extends('admin.sidebar')
    @section('content') 
    <body>
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-600">Lowongan</h1>
        </div>
        <div class="card">
            <div class="card-header">
                <h6 class="m-0 font-bold text-primary">Data Lowongan</h6>
            </div>
            <div class="card-header">
                <a href="{{ url('lowongan/add') }}" class="btn btn-primary">
                   <i class="bi bi-person-plus-fill mr-2">
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                           <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                           <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                       </svg>
                   </i>
                   Tambah data
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered table-stiped">
                        <thead>
                            <tr class="text-center" style="background-color: rgb(211, 211, 211)">
                                <th>No</th>
                                <th>Nis</th>
                                <th>Perusahaan</th>
                                <th>Tanggal</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lowongan as $key => $item)
                                <tr class="text-center">
                                    <td>{{ $key += 1 }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->tanggal }}</td>
                                    <td>{{ $item->judul }}</td>
                                    <td>{{ $item->deskripsi }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>    
@endsection