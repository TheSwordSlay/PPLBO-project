@extends('layouts/main')

@section('content')
@include('partials/navbar')
<div class="container pt-5">
  <!-- Content here -->
  <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
  <div class="card-body">
    <!-- Button trigger modal -->
      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#TambahMatkul">
        Tambah Matkul
      </button>
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
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editMatkul{{ $mk->id }}">Edit</button>
                
            </td>
            <td>
              <a href="/hapus-matkul/{{$mk->id}}"><button type="button" class="btn btn-danger">Hapus</button></a>
            </td>
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

@foreach($matakuliah as $mk)

<!-- Modal -->
<div class="modal fade" id="editMatkul{{$mk->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit matkul</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('update-matkul')}}" method="post">
          @csrf
          <div class="mb-3">
            <label for="nama-matkul" class="form-label">Nama matkul</label>
            <input name="id" type="hidden" value="{{ $mk->id }}" class="form-control" id="nama-matkul">
            <input name="nama_mk" type="text" value="{{ $mk->nama_mk }}" class="form-control" id="nama-matkul" required>
          </div>
          <div class="mb-3">
            <label for="nama-dosen" class="form-label">Nama dosen</label>
            <input name="Dosen" type="text" value="{{ $mk->Dosen }}" class="form-control" id="nama-dosen" required>
          </div>
          <div class="mb-3">
            <!-- <label for="hari-masuk" class="form-label">Hari masuk</label>
            <input name="hari" type="text" value="{{ $mk->hari }}" class="form-control" id="hari-masuk"> -->
            <label for="hari-masuk" class="form-label">Hari masuk</label>
            <select name="hari" id="hari-masuk" class="form-control" required>
              <option value="2" @if($mk->hari == 2) selected @endif>Senin</option>
              <option value="3" @if($mk->hari == 3) selected @endif>Selasa</option>
              <option value="4" @if($mk->hari == 4) selected @endif>Rabu</option>
              <option value="5" @if($mk->hari == 5) selected @endif>Kamis</option>
              <option value="6" @if($mk->hari == 6) selected @endif>Jum'at</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="jam_masuk" class="form-label">Jam masuk</label>
            <input name="jam_masuk" type="time" value="{{ $mk->jam_masuk }}" class="form-control" id="jam_masuk" required>
          </div>
          <div class="mb-3">
            <label for="jam_selesai" class="form-label">Jam selesai</label>
            <input name="jam_selesai" type="time" value="{{ $mk->jam_selesai }}" class="form-control" id="jam_selesai" required>
          </div>
          <button type="submit" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endforeach



<!-- Modal -->
<div class="modal fade" id="TambahMatkul" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Matkul</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('tambah-matkul')}}" method="post">
          @csrf
          <div class="mb-3">
            <label for="nama-matkul" class="form-label">Nama matkul</label>
            <input name="nama_mk" type="text" class="form-control" id="nama-matkul" required>
          </div>
          <div class="mb-3">
            <label for="nama-dosen" class="form-label">Nama dosen</label>
            <input name="Dosen" type="text" class="form-control" id="nama-dosen" required>
          </div>
          <div class="mb-3">
            <label for="hari-masuk" class="form-label">Hari masuk</label>
            <select name="hari" id="hari-masuk" class="form-control" required>
              <option value="2">Senin</option>
              <option value="3">Selasa</option>
              <option value="4">Rabu</option>
              <option value="5">Kamis</option>
              <option value="6">Jum'at</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="jam_masuk" class="form-label">Jam masuk</label>
            <input name="jam_masuk" type="time" class="form-control" id="jam_masuk" required>
          </div>
          <div class="mb-3">
            <label for="jam_selesai" class="form-label">Jam selesai</label>
            <input name="jam_selesai" type="time" class="form-control" id="jam_selesai" required>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection