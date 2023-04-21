@extends('layouts/main')

@section('content')
@include('partials/navbar')
<div class="container pt-5">
  <!-- Content here -->
  <div class="card">
  <div class="card-body">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Mata Kuliah</th>
            <th scope="col">Dosen</th>
            <th scope="col">Hari masuk</th>
            <th scope="col">Jam masuk</th>
            <th scope="col">Jam selesai</th>
            <th scope="col">Action</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
        @php
            {{ $i = 1; }}
        @endphp

        @foreach($matakuliah as $mk)
          <tr>
            <th scope="row">{{$i}}</th>
            <td>{{ $mk->nama_mk }}</td>
            <td>{{ $mk->Dosen }}</td>
            <td>
                @if ($mk->hari == 2)
                Senin
                @elseif ($mk->hari == 3) 
                Selasa
                @elseif ($mk->hari == 4)
                Rabu
                @elseif ($mk->hari == 5)
                Kamis
                @elseif ($mk->hari == 6)  
                Jum'at
                @endif
            </td>
            <td>{{ $mk->jam_masuk }}</td>
            <td>{{ $mk->jam_selesai }}</td>
            <td>
                <button type="button" class="btn btn-primary">Edit</button>
                
            </td>
            <td><button type="button" class="btn btn-danger">Hapus</button></td>
          </tr>
            @php
                {{ $i = $i+1; }}
            @endphp
        @endforeach
          
        </tbody>
      </table>    
  </div>
</div>
</div>
@endsection