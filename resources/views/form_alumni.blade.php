<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALUMNI</title>
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
                    <h3 class="text-center fw-bold pt-3">Tambah Data Alumni</h3>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Nisn</label>
                            <input class="form-control" type="text" name="nis" id="nis" value="{{ $alumni->nis }}" placeholder="Masukkan Nisn">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">password</label>
                            <input class="form-control" type="password" name="password" id="password" value="{{ $alumni->password }}" placeholder="Masukkan Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Nama</label>
                            <input class="form-control" type="text" name="nama" id="nama" value="{{ $alumni->nama }}" placeholder="Masukkan Nama">
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Kelas</label>
                            <input class="form-control" type="text" name="kelas" id="kelas" value="{{ $alumni->kelas }}" placeholder="Masukkan Kelas">
                        </div>
                    </div> --}}
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="jk">Jenis Kelamin</label><br>
                            <input type="radio" name="jk" id="jk" value="Laki-laki" {{ $alumni->jk=="Laki-laki"?"checked":"" }}>Laki-laki
                            <input type="radio" name="jk" id="jk" value="Perempuan" {{ $alumni->jk=="Perempuan"?"checked":"" }}>Perempuan
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Jurusan</label>
                            <select name="jurusan" id="jurusan" class="form-select">
                                <option value="">-- Pilih --</option>
                                <option value="RPL" {{ $alumni->jurusan=='RPL'?'selected':'' }} >RPL</option>
                                <option value="TKJ" {{ $alumni->jurusan=='TKJ'?'selected':'' }} >TKJ</option>
                                <option value="MM" {{ $alumni->jurusan=='MM'?'selected':'' }} >MM</option>
                                <option value="DPIB" {{ $alumni->jurusan=='DPIB'?'selected':'' }} >DPIB</option>
                                <option value="Teklin" {{ $alumni->jurusan=='Teklin'?'selected':'' }} >TEKLIN</option>
                                <option value="TBSM" {{ $alumni->jurusan=='TBSM'?'selected':'' }} >TBSM</option>
                                <option value="TKRO" {{ $alumni->jurusan=='TKRO'?'selected':'' }} >TKRO</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Tanggal Lahir</label>
                            <input class="form-control" type="date" name="tgl_lahir" id="tgl_lahir" value="{{ $alumni->tgl_lahir }}" placeholder="Masukkan Tanggal Lahir">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Telepon</label>
                            <input class="form-control" type="text" name="telepon" id="telepon" value="{{ $alumni->telepon }}" placeholder="Masukkan telepon">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Alamat</label>
                            <input class="form-control" type="text" name="alamat" id="alamat" value="{{ $alumni->alamat }}" placeholder="Masukkan Alamat">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Tahun Ajaran</label>
                            <input class="form-control" type="text" name="thn_ajaran" id="thn_ajaran" value="{{ $alumni->thn_ajaran }}" placeholder="Masukkan Tahun Ajaran">
                        </div>
                    </div>
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
