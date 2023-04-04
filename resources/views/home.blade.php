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
                                <p class="subject-name">{{ $mk->nama_mk }}</p>
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
                                <p class="subject-name">{{ $mk->nama_mk }}</p>
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
                                <p class="subject-name">{{ $mk->nama_mk }}</p>
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
                            <section class="subject">
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
                            <section class="subject">
                                <p class="subject-name">{{ $mk->nama_mk }}</p>
                                <p class="time">{{ $mk->jam_masuk }} - {{ $mk->jam_selesai }}</p>
                            </section>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
@endsection