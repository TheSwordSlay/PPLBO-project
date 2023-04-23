@extends('layouts/main')

@section('content')
@include('partials/navbar')
<div class="container mt-5">
    <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
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
            <h1>Tidak ada data yang ditemukan</h1>
            @endif
        </div>
    </div>   
</div>
@endsection