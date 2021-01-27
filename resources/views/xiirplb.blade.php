@extends('master')

@section('title', 'Siswa XII RPL B')

<!-- judul halaman -->
@section('judul halaman', 'Halaman XII RPL B')

<!-- Isi Konten -->
@section('konten')

  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">NISN</th>
      <th scope="col">NAMA</th>
      <th scope="col">JENIS KELAMIN</th>
      <th scope="col">ALAMAT</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>

    @foreach($murid as $murid)

    <tr>
      <th scope="row">{{ $murid->nisn }}</th>
      <td>{{ $murid->nama }}</td>
      <td>{{ $murid->jenis_kelamin }}</td>
      <td>{{ $murid->alamat }}</td>
      <td>
        <button type="button" class="btn btn-light"><a class="text-dark" href="update/{{ $murid->nisn }}">Ubah</a></button>
        <button type="button" class="btn btn-dark"><a class="text-light" onclick="return confirm('Apakah anda yakin ingin mengahpus data {{ $murid->nama }}')" href="delete/{{ $murid->nisn }}">Hapus</a></button>
      </td>
    </tr>

    @endforeach

  </tbody>
</table>

<center><a class="text-dark" href="/xiirplb/tambah"> Tambah Siswa </a></center>

<br><br>
@endsection