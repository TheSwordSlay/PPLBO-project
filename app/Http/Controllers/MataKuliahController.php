<?php

namespace App\Http\Controllers;

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
    
}
