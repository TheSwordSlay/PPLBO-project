@extends('layouts/main')

@section('content')
@include('partials/navbar')
<div class="container pt-5">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Search
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Cari data absen</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">           
            <form action="{{route('cari-absen')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="mahasiswa" class="form-label">Mahasiswa</label>
                    <select class="form-control" name="nama_siswa" id="mahasiswa">
                        <option value="*" selected>Semua mahasiswa</option>
                        @foreach($users as $user)
                            @if(!($user->name == 'Admin'))
                            <option value="{{$user->name}}">{{$user->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input name="tanggal_absen" type="date" value="*" class="form-control" id="tanggal">
                </div>
                <div class="mb-3">
                    <label for="mata_kuliah" class="form-label">Mata kuliah</label>
                    <select name="mata_kuliah" id="mata_kuliah" class="form-control">
                        <option value="*" selected>Semua mata kuliah</option>
                        @foreach ($matakuliah as $mk)
                            <option value="{{ $mk->nama_mk }}">{{ $mk->nama_mk }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>
        </div>

        </div>
    </div>
    </div>

    <div class="card shadow p-3 mb-5 bg-body-tertiary rounded mt-2">
        <div class="card-body">
            @php
                $j = 0;
            @endphp
            @foreach($absensi as $absen)
                @php
                    $j = $j + 1;
                @endphp
            @endforeach
            @if(!($j == 0))
            <table class="table table-hover">
            <thead>
                <tr>
                    <th class="col">No.</th>
                    <th class="col">NIM</th>
                    <th class="col">Nama</th>
                    <th class="col">Tanggal</th>
                    <th class="col">Mata Kuliah</th>
                    <th class="col">Kehadiran</th>
                </tr>
            </thead>
            <tbody>
                @php
                    {{ $i = 1; }}
                @endphp
                @foreach($absensi as $absen)
                <tr>
                <th scope="row">{{$i}}</th>
                    <td>{{$absen->nim}}</td>
                    <td>{{$absen->nama_siswa}}</td>
                    <td>{{ $absen->tanggal_absen }}</td>
                    <td>{{ $absen->mata_kuliah }}</td>
                    <td>
                        @if ($absen->kehadiran == 'Hadir')
                            <div class="card text-center bg-primary text-white" >
                                {{ $absen->kehadiran }} 
                            </div>              
                        @elseif ($absen->kehadiran == 'Izin')   
                            <div class="card text-center bg-warning text-dark" >
                                {{ $absen->kehadiran }} 
                            </div>
                        @elseif ($absen->kehadiran = 'Sakit')   
                            <div class="card text-center bg-body-secondary" >
                                {{ $absen->kehadiran }} 
                            </div>
                        @endif
                    </td>
                </tr>
                @php
                    {{ $i = $i+1; }}
                @endphp
                @endforeach
            </tbody>
            </table>
            @else
            <h3>Tidak ada data yang ditemukan</h3>
            @endif
        </div>
    </div>   
</div>
@endsection