<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\MataKuliah;
use App\Models\User;
use Illuminate\Http\Request;
use Session;
use Illuminate\Validation\Rule;

class AbsensiController extends Controller
{
    public function absen(Request $request) {
        $dataAbsen = Absensi::all();
        $validate = true;
        foreach($dataAbsen as $da) {
            if($da->nama_siswa == $request->nama && $da->tanggal_absen == $request->tanggal_absen && $da->mata_kuliah == $request->mata_kuliah) {
                $validate = false;
            }
        }

        $res = false;
        if($validate) {
            $absen = new Absensi;
            $absen->nim = $request->nim;
            $absen->nama_siswa = $request->nama;
            $absen->tanggal_absen = $request->tanggal_absen;
            $absen->kehadiran = $request->absen;
            $absen->mata_kuliah = $request->mata_kuliah;
            $absen->save();
            $res = true;
        }

        if($res) {
            return back()->with('success', 'Berhasil Absen');
        } else {
            return back()->with('fail', 'Anda sudah absen mata kuliah tersebut hari ini');
        }
    }

    public function getAbsen() {
        return view('tabelAbsen', [
            "absensi" => Absensi::all(),
            "users" => User::all()->except('Admin'),
            "matakuliah" => MataKuliah::all(),
       ]);
    }

    public function cariAbsen(Request $request) {
        // dd($request->nama_siswa);
        if($request->nama_siswa == '*') {
            $request->nama_siswa = '';
        }
        if($request->tanggal_absen == '*') {
            $request->tanggal_absen = '';
        }
        if($request->mata_kuliah == '*') {
            $request->mata_kuliah = '';
        }
        return view('tabelAbsen', [
            "absensi" => Absensi::where('nama_siswa', 'LIKE', '%'.$request->nama_siswa.'%')
            ->where('tanggal_absen', 'LIKE', '%'.$request->tanggal_absen.'%')
            ->where('mata_kuliah', 'LIKE', '%'.$request->mata_kuliah.'%')->get(),
            "users" => User::all()->except('Admin'),
            "matakuliah" => MataKuliah::all(),
       ]);
    }

}
