<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;
use App\Http\Requests\StoreMataKuliahRequest;
use App\Http\Requests\UpdateMataKuliahRequest;
use App\Models\User;
use Hash;
use Session;

class MataKuliahController extends Controller
{
    public function index()
    {
        return view('home', [
             "matakuliah" => MataKuliah::all(),
        ]);
    }

    public function absen()
    {
        return view('absen', [
             "matakuliah" => MataKuliah::all(),
        ]);
    }

    public function daftarMatkul()
    {
        return view('tabelMatkul', [
             "matakuliah" => MataKuliah::all(),
        ]);
    }

    public function updateMatkul(Request $request)
    {
        $data = MataKuliah::find($request->id);
        $data->update($request->except(['_token', 'id']));
        return redirect()->route('edit-matkul');
    }

    public function tambahMatkul(Request $request)
    {    
        $matkul = new MataKuliah;
        $matkul->nama_mk = $request->nama_mk;
        $matkul->Dosen = $request->Dosen;
        $matkul->nama_mk = $request->nama_mk;
        $matkul->hari = $request->hari;
        $matkul->nama_mk = $request->nama_mk;
        $matkul->jam_masuk = $request->jam_masuk;
        $matkul->jam_selesai = $request->jam_selesai;
        $matkul->save();
        return redirect()->route('edit-matkul');
    }

    public function hapusMatkul($id)
    {
        $data = MataKuliah::find($id);
        $data->delete();
        return redirect()->route('edit-matkul');
    }
    
}
