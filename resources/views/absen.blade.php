<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com" defer></script>
    <title>Document</title>
</head>
<body class="bg-slate-200">
    @include('partials.navbartailwind')
    <div class="container p-3 m-2 mx-auto">
        <form action="{{route('absensi')}}" method="post" class="bg-slate-50 border border-slate-200  max-w-lg rounded-xl mx-auto shadow-md font-inter p-5 lg:mt-16">
            @csrf
            <h1 class="font-bold text-3xl text-center text-slate-800 pb-10">Absensi</h1>
            @if(Session::has('success'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
            <div class="flex">
                <div>
                <p class="text-sm">{{ Session::get('success') }}</p>
                </div>
            </div>
            </div>
            @endif
            @if(Session::has('fail'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ Session::get('fail') }}</span>
            </div>
            @endif
            <label for="nim">
                <span class="block font-semibold text-slate-700">NIM</span>
                <input type="hidden" name="nim" value="{{ Session::get('data')->nim }}">
                <span class="px-3 py-2 border rounded-xl shadow w-full block text-small placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 mb-[1.25rem]">{{ Session::get('data')->nim }}</span>       
            </label>
            <label for="nama">
                <span class="block font-semibold text-slate-700">Nama</span>
                <input type="hidden" name="nama" value="{{ Session::get('data')->name }}">
                <span class="px-3 py-2 border rounded-xl shadow w-full block text-small placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 mb-[1.25rem]">{{ Session::get('data')->name }}</span>  
                <input type="hidden" name="tanggal_absen" value="{{ now()->format('Y-m-d') }}">
            @php
                {{ $i = 0; }}
            @endphp
            @foreach($matakuliah as $mk)
                @if($mk->hari == Carbon\Carbon::now()->dayOfWeek+1)
                    @php
                        {{ $i = $i + 1; }}
                    @endphp
                @endif
            @endforeach
            @if($i > 0)
                <label for="Matakuliah">
                    <span class="block font-semibold text-slate-700">Mata Kuliah</span>
                <select name="mata_kuliah" id="Matakuliah" class="px-3 py-2 border rounded-xl shadow w-full block text-small placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 mb-[1.25rem]">
                @foreach($matakuliah as $mk)
                    @if($mk->hari == Carbon\Carbon::now()->dayOfWeek+1)
                    <option value="{{$mk->nama_mk}}">{{$mk->nama_mk}}</option>
                    @endif
                @endforeach
                </select>
            @else
            <label for="Matakuliah">
                <span class="block font-semibold text-slate-700">Mata Kuliah</span>
                <span class="px-3 py-2 border rounded-xl shadow w-full block text-small placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 mb-[1.25rem]">Tidak ada mata kuliah yang absennya dibuka hari ini</span>  
            @endif

            @if($i > 0)
            <label for="kehadiran">
                <span class="block font-semibold text-slate-700 mb-2">Kehadiran</span>
                <label for="hadir" class="mr-5"><input value="Hadir" name="absen" id="hadir" type="radio" required>Hadir</label>
                <label for="izin" class="mr-5"><input value="Izin" name="absen" id="izin" type="radio">Izin</label>
                <label for="sakit" class="mr-5"><input value="Sakit" name="absen" id="sakit" type="radio">Sakit</label>
            </label>
            <input type="submit" value="Submit" class="bg-violet-500 text-slate-50 font-semibold px-3 py-2 rounded-xl w-full my-3 hover:bg-sky-600">
            @endif
        </form>
    </div>
</body>
</html>