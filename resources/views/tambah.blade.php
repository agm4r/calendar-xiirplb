@extends('master')

@section('title', 'Tambah Siswa XII RPL B')

<!-- judul halaman -->
@section('judul halaman', 'Tambah Siswa')

<!-- Isi Konten -->
@section('konten')

  <form action="/xiirplb/store" method="post">
    {{ csrf_field() }}
  <div class="form-group">
    <label>NISN</label>
    <input type="text" class="form-control" name="nisn" >
  </div>
  <div class="form-group">
    <label>NAMA</label>
    <input type="text" class="form-control" name="nama" >
  </div>
  <div class="form-group">
    <label>JENIS KELAMIN</label>
    <select class="form-control" name="jenis_kelamin">
      <option>Lelaki</option>
      <option>Perempuan</option>
    </select>
  </div>
  <div class="form-group">
    <label>ALAMAT</label>
    <input type="text" class="form-control" name="alamat" >
  </div>
  <!-- <div class="form-group">
    <label>PUKUL</label>
    <input type="time" id="timeslot" class="form-control" name="timeslot" placeholder="Time" required>
  </div> -->
  <button type="submit" name="submit" class="btn btn-dark">Submit</button>
</form>

<br><br><center><a class="text-dark" href="/xiirplb/siswa">Back</a></center>

@endsection