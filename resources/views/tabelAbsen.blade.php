<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        td, th {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
    </style>
</head>

<body>
    @include('partials.navbartailwind')
    <div class=" border shadow-lg max-w-6xl mx-auto my-10 rounded-2xl overflow-hidden">
        <table class="table-fixed border-collapse mx-auto w-full">
            <caption></caption>
            <thead class="text-xl text-slate-700">
              <tr class="border-bottom border-b-[0.1rem]">
                <th class="">No.</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Mata Kuliah</th>
                <th>Keterangan</th>
              </tr>
            </thead>
            <tbody class="text-lg text-slate-600">
                @php
                    {{ $i = 1; }}
                @endphp
                @foreach($absensi as $absen)
                <tr class="border-bottom border-b-[0.075rem]">
                    <td align=center>{{ $i }}.</td>
                    <td align=center>{{$absen->nim}}</td>
                    <td align=center>{{$absen->nama_siswa}}</td>
                    <td align=center>{{ $absen->tanggal_absen }}</td>
                    <td align=center>{{ $absen->mata_kuliah }}</td>
                    <td align=center>
                        @if($absen->kehadiran == 'Hadir')
                        <span class="bg-blue-300 text-blue-900 px-3 py-1 font-bold text-sm rounded-lg">
                        @elseif($absen->kehadiran == 'Izin')
                        <span class="bg-yellow-300 text-yellow-900 px-3 py-1 font-bold text-sm rounded-lg">
                        @else
                        <span class="bg-stone-300 text-stone-900 px-3 py-1 font-bold text-sm rounded-lg">
                        @endif
                            {{ $absen->kehadiran }}
                        </span>
                    </td>
                </tr>
                @php
                    {{ $i = $i + 1; }}
                @endphp
                @endforeach             
            </tbody>
          </table>
    </div>
</body>