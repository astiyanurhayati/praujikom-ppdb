<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{

    function dashboard()
    {
        
        $pendaftar = User::count() - 1; 
       
        $perempuan = User::where('jk', "wanite")->count(); 
        $laki = User::where('jk', 'pria')->count(); 
        $pplg = User::where('jurusan', "PPLG")->count();

        return view('backend.dashboard', compact('pendaftar', 'perempuan', 'laki', 'pplg'));
    }
    function dataSiswa()
    {

        $datas = User::latest()->get();
        return view('backend.data_siswa', compact('datas'));
    }
}
