<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOWONGAN</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
           
            background-color: #E0ECE4;
            font-family: Georgia;
        }
    </style>
</head>
<body>
    <form action="{{ $action }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container pt-4 mt-4">
            <div class="row justify-content-center align-item-center">
                <div class="col-md-4 py-4">
                    <h3 class="text-center fw-bold pt-3">Tambah Data Lowongan</h3>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Nis</label>
                            <select class="form-select" name="nis" id="nis">
                                <option value="Perusahaan"></option>
                                @foreach ($alumni as $item)
                                    <option value="{{$item->nis}}" name="{{$item->nis==$lowongan->nis?'selected':''}}">{{$item->nis}}</option>
                                @endforeach
                            </select>
                            {{-- <input class="form-control" type="text" name="nis" id="nis" value="{{ $lowongan->nis }}" placeholder="Masukkan Nis"> --}}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">perusahaan</label>
                            <select class="form-select" name="id_perusahaan" id="id_perusahaan">
                                <option value=""></option>
                                @foreach ($perusahaan as $item)
                                    <option value="{{$item->id_perusahaan}}">{{$item->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Judul</label>
                            <input class="form-control" type="text" name="judul" id="judul" value="{{ $lowongan->judul }}" placeholder="Masukkan Judul">
                        </div>
                    </div>    
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Deskripsi</label>
                            <input class="form-control" type="text" name="deskripsi" id="deskripsi" value="{{ $lowongan->deskripsi }}" placeholder="Masukkan Deskripsi">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Tanggal</label>
                            <input class="form-control" type="date" name="tanggal" id="tanggal" value="{{ $lowongan->tanggal }}" placeholder="Masukkan Tanggal">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Status</label>
                       <select name="status" id="status" class="form-select">
                       <option value="">--Pilih--</option>
                       <option value="Aktif"{{ $lowongan->status=='Aktif'?'selected':''}}>Aktif</option>
                       <option value="Tidak Aktif"{{ $lowongan->status=='Tidak Aktif'?'selected':''}}>Tidak Aktif</option>
                       </select>

                       <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Foto</label>
                            <input type="File" name="foto" id="foto" class="form-control">
                    
                    <div class="form-group">
                        <div class="pt-3">
                            <input class="form-control btn btn-primary" type="submit" value="{{ $tombol }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>   
</body>
</html>
