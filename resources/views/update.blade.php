@extends('master')

@section('title', 'Edit Siswa XII RPL B')

<!-- judul halaman -->
@section('judul halaman', 'Edit Siswa')

<!-- Isi Konten -->
@section('konten')

  @foreach( $murid as $m )

  <form action="/xiirplb/edit" method="post">
    {{ csrf_field() }}
  <div class="form-group">
    <label>NISN</label>
    <input type="text" class="form-control" name="nisn" value="{{ $m->nisn }}" readonly>
  </div>
   <div class="form-group">
    <label>NAMA</label>
    <input type="text" class="form-control" name="nama" value="{{ $m->nama }}">
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
    <input type="text" class="form-control" name="alamat" value="{{ $m->alamat }}">
  </div>
  <button type="submit" name="submit" class="btn btn-dark">Submit</button>
</form>

@endforeach

<br><br><center><a class="text-dark" href="/xiirplb/siswa">Back</a></center>

@endsection