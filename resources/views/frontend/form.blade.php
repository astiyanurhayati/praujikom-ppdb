<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form Pendaftaran</title>
</head>

@php
$listSekolah = [
'SMP Negeri 02 Megamendung',
"SMP Negeri 3 Bogor",
"IBNU AQIL",
"SMP Negeri 01 Ciawi"
];

$listJurusan = [
'PPLG', 
'TKJT', 
'PMN', 
'MPLB', 
'HTL', 
'TBG', 

];
@endphp
<body style="background: plum">
    <div class="container m-5">
        <div class="card p-5">
            <h1 class="text-center mb-5">Form Pendaftaran PPDB</h1>
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>@foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{route('form.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" value="{{old('nama_lengkap')}}">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="{{old('email')}}">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="text" class="form-label">Asal Sekolah</label>
                        <select onchange="tampilakanSekolahInput()" id="sekolah" class="form-select" name="asal_sekolah">
                            <option value="">Pilih</option>
                            @foreach ($listSekolah as $list)
                            <option value="{{ $list }}">{{ $list }}</option>
                            @endforeach

                            <option value="sekolah_lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="mb-3 col-lg-6" style="display: none" id="sekolah_lainnya">
                        <label for="sekolah_lainnya" class="form-label">Sekolah Lainnya</label>
                        <input type="text" class="form-control" name="sekolah_lainnya">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="no_phone" class="form-label">No Telephone</label>
                        <input type="text" class="form-control" name="no_phone" value="{{old('no_phone')}}">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="no_phone_ortu" class="form-label">No Telephone Orang Tua/Wali</label>
                        <input type="text" class="form-control" name="no_phone_ortu" value="{{old('no_phone_ortu')}}">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="jk" class="form-label">JK</label>
                        <select class="form-select" name="jk">
                            <option>Pilih</option>
                            <option value="pria">Laki-Laki</option>
                            <option value="wanita">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="jurusan" class="form-label">Jurusan Minat</label>
                        <select class="form-select" name="jurusan">
                            <option>Pilih</option>
                            @foreach ($listJurusan as $jurusan )
                            <option value="{{$jurusan}}">{{$jurusan}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="nisn" class="form-label">NISN</label>
                        <input type="number" class="form-control" name="nisn" value="{{old('nisn')}}">
                    </div>

                </div>
                <button type="submit" class="btn btn-primary">Daftar</button>
            </form>
        </div>
    </div>
    <script>
        function tampilakanSekolahInput() {
            let sekolah = document.getElementById("sekolah").value;
            let sekolahLainnya = document.getElementById("sekolah_lainnya");
            if (sekolah == "sekolah_lainnya") {
                sekolahLainnya.style.display = "";
            } else {
                sekolahLainnya.style.display = "none";
            }
        }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
