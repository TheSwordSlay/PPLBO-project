@extends('layouts/main')

@section('content')
@include('partials/navbar')
<div class="content-box">
            <div class="first-line">
                <div class="schedule-card senin">
                    <h1 class="day-name">Senin</h1>
                    <hr>
                    @foreach ($matakuliah as $mk)
                        @if($mk->hari === 2)
                            <section class="subject">
                                <p class="subject-name" data-bs-toggle="modal" data-bs-target="#matkul{{$mk->id}}">{{ $mk->nama_mk }}</p>
                                <p class="time">{{ $mk->jam_masuk }} - {{ $mk->jam_selesai }}</p>
                            </section>
                        @endif
                    @endforeach
                </div>
                <div class="schedule-card selasa">
                    <h1 class="day-name">Selasa</h1>
                    <hr>
                    @foreach ($matakuliah as $mk)
                        @if($mk->hari === 3)
                            <section class="subject">
                                <p class="subject-name" data-bs-toggle="modal" data-bs-target="#matkul{{$mk->id}}">{{ $mk->nama_mk }}</p>
                                <p class="time">{{ $mk->jam_masuk }} - {{ $mk->jam_selesai }}</p>
                            </section>
                        @endif
                    @endforeach
                </div>
                <div class="schedule-card rabu">
                    <h1 class="day-name">Rabu</h1>
                    <hr>
                    @foreach ($matakuliah as $mk)
                        @if($mk->hari === 4)
                            <section class="subject">
                                <p class="subject-name" data-bs-toggle="modal" data-bs-target="#matkul{{$mk->id}}">{{ $mk->nama_mk }}</p>
                                <p class="time">{{ $mk->jam_masuk }} - {{ $mk->jam_selesai }}</p>
                            </section>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="second-line">
                <div class="schedule-card kamis">
                    <h1 class="day-name">Kamis</h1>
                    <hr>
                    @foreach ($matakuliah as $mk)
                        @if($mk->hari === 5)
                            <section class="subject" data-bs-toggle="modal" data-bs-target="#matkul{{$mk->id}}">
                                <p class="subject-name">{{ $mk->nama_mk }}</p>
                                <p class="time">{{ $mk->jam_masuk }} - {{ $mk->jam_selesai }}</p>
                            </section>
                        @endif
                    @endforeach
                </div>
                <div class="schedule-card jumat">
                    <h1 class="day-name">Jumat</h1>
                    <hr>
                    @foreach ($matakuliah as $mk)
                        @if($mk->hari === 6)
                            <section class="subject" data-bs-toggle="modal" data-bs-target="#matkul{{$mk->id}}">
                                <p class="subject-name">{{ $mk->nama_mk }}</p>
                                <p class="time">{{ $mk->jam_masuk }} - {{ $mk->jam_selesai }}</p>
                            </section>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

<!-- Modal -->
@foreach($matakuliah as $mk)
<div class="modal fade" id="matkul{{$mk->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $mk->nama_mk }}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Dosen : {{$mk->Dosen}}</p>
        <p>Hari : 
            @if($mk->hari == 2)
            Senin
            @elseif($mk->hari == 3)
            Selasa
            @elseif($mk->hari == 4)
            Rabu
            @elseif($mk->hari == 5)
            Kamis
            @elseif($mk->hari == 6)
            Jum'at
            @endif
        </p>
        <p>Jam : {{$mk->jam_masuk}} - {{$mk->jam_selesai}}</p>
        <a href="/absen"><button type="button" class="btn btn-primary" href="/absen">Absen</button></a>
      </div>
    </div>
  </div>
</div>
@endforeach

@endsection