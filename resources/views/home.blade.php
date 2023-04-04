@extends('layouts/main')

@section('content')
<div class="content-box">
            <div class="first-line">
                <div class="schedule-card senin">
                    <h1 class="day-name">Senin</h1>
                    <hr>
                    <section class="subject">
                        <p class="subject-name">Pengolahan Citra</p>
                        <p class="time">10.30 - 13.00</p>
                    </section>
                    <section class="subject">
                        <p class="subject-name">Data Warehouse</p>
                        <p class="time">13.00 - 16.00</p>
                    </section>
                </div>
                <div class="schedule-card selasa">
                    <h1 class="day-name">Selasa</h1>
                    <hr>
                    <section class="subject">
                        <p class="subject-name">Kecerdasan Buatan</p>
                        <p class="time">08.00 - 10.30</p>
                    </section>
                    <section class="subject">
                       <p class="subject-name"> PPLBO</p>
                       <p class="time">13.30 - 16.00</p>
                    </section>
                </div>
                <div class="schedule-card rabu">
                    <h1 class="day-name">Rabu</h1>
                    <hr>
                    <section class="subject">
                        <p class="subject-name">Pratikum PPLBO</p>
                        <p class="time">08.00 - 10.00</p>
                    </section>
                    <section class="subject">
                        <p class="subject-name">Etika Profesi</p>
                        <p class="time">13.30 - 16.00</p>
                    </section>
                </div>
            </div>
            <div class="second-line">
                <div class="schedule-card kamis">
                    <h1 class="day-name">Kamis</h1>
                    <hr>
                    <section class="subject">
                        <p class="subject-name">Pemrograman Web II</p>
                        <p class="time">10.30 - 13.00</p>
                    </section>
                    <section class="subject">
                        <p class="subject-name">Teori Bahasa dan Otomata</p>
                        <p class="time"> 13.30 - 16.00</p>
                    </section>
                </div>
                <div class="schedule-card jumat">
                    <h1 class="day-name">Jumat</h1>
                    <hr>
                    <section class="subject">
                        <p class="subject-name">Rekayasa Perangkat Lunak</p>
                        <p class="time">08.00 - 10.30</p>
                    </section>
                </div>
            </div>
        </div>
@endsection