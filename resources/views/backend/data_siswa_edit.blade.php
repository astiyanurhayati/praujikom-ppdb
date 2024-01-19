@extends('layouts.master')


@section('content-master')
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
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Data Siswa</li>
                </ol>
                <h6 class="font-weight-bolder text-white mb-0">Data Siswa</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none">Log Out</span>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Edit Data siswa {{$user->nama_lengkap}}</h6>
                    </div>
                    <div class="card-body p-5">
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
                                    <input type="text" class="form-control" name="nama_lengkap" value="{{$user->nama_lengkap}}">
                                </div>
                                <div class="mb-3 col-lg-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" value="{{$user->email}}">
                                </div>
                                <div class="mb-3 col-lg-6">
                                    <label for="text" class="form-label">Asal Sekolah</label>
                                    <select onchange="tampilakanSekolahInput()"  id="sekolah" class="form-select" name="asal_sekolah">
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
            </div>
        </div>
</main>
<script>
    function hapusNote(event) {
        event.preventDefault();

        Swal.fire({
            title: 'Konfirmasi'
            , text: 'Apakah Anda yakin untuk menghapus data ini?'
            , icon: 'warning'
            , showCancelButton: true
            , confirmButtonText: 'Hapus'
            , cancelButtonText: 'Batal'
            , confirmButtonColor: '#10b200'
            , cancelButtonColor: '#6c757d'
        , }).then((result) => {
            if (result.isConfirmed) {
                event.target.closest('form').submit();
            }
        });
    }

</script>

@endsection
