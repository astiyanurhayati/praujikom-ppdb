<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FormController extends Controller
{
    function index()
    {
        return view('frontend.form');
    }
    public function store(Request $request)
    {
        $select = $request->asal_sekolah;

        if ($select == "sekolah_lainnya") {
            $selectDb = $request->sekolah_lainnya;
        } else {
            $selectDb = $request->asal_sekolah;
        }
        $request->validate([
            'nisn' => 'required',
            'jk' => 'required',
            'jurusan' => 'required',
            'nama_lengkap' => 'required',
            'asal_sekolah' => 'required',
            'email' => 'required|unique:users',
            'no_phone' => 'required',
            'no_phone_ortu' => 'required'
        ]);

        User::create([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'nisn' => $request->nisn,
            'asal_sekolah' => $selectDb,
            'jurusan' => $request->jurusan,
            'no_phone' => $request->no_phone,
            'no_phone_ortu' => $request->no_phone_ortu,
            'jk' => $request->jk,
            'role' => 'user',
            'password' => bcrypt($request->nisn)
        ]);
        return redirect('/login')->with('success', "Terimakasih Telah Mendaftar");
    }

    public function destroy($nisn)
    {
        User::where('nisn', $nisn)->delete();
        return back()->with('error', 'Data Step telah dihapus !');
    }

    function edit($nisn)
    {
        $user =  User::where('nisn', $nisn)->first();
        return view('backend.data_siswa_edit', compact('user'));
    }

    function update(Request $request, $nisn)
    {
        $select = $request->asal_sekolah;
        if ($select == "sekolah_lainnya") {
            $ambil = $request->sekolah_lainnya;
        } else {
            $ambil = $request->asal_sekolah;
        }
        $request->validate([
            'nisn' => 'required',
            'jk' => 'required',
            'jurusan' => 'required',
            'nama_lengkap' => 'required',
            'asal_sekolah' => 'required',
            'email' => 'required|unique:users',
            'no_phone' => 'required',
            'no_phone_ortu' => 'required'
        ]);

        $data = User::where('nisn', $nisn)->first();
        $data->update([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'nisn' => $request->nisn,
            'asal_sekolah' => $ambil,
            'jurusan' => $request->jurusan,
            'no_phone' => $request->no_phone,
            'no_phone_ortu' => $request->no_phone_ortu,
            'jk' => $request->jk,

        ]);

        return redirect('/dashboard/data-siswa')->with('status', 'Berhasil Update Data Siswa');

    }
}
