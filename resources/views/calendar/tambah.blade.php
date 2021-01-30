@extends('master')

@section('title', 'Tambah events XII RPL B')

<!-- judul halaman -->
@section('judul halaman', 'XII RPL B')

<!-- Isi Konten -->
@section('konten')


<h3>Tambah event {{ date('d F Y', strtotime($date)) }}</h3>

  <form action="/events/insert" method="post">
    {{ csrf_field() }}
  <div class="form-group">
    <label>Judul</label>
    <input type="text" class="form-control" name="title">
  </div>
  <div class="form-group">
    <label>DATE</label>
    <input type="date" class="form-control" name="date" value="{{ $date }}" readonly>
  </div>
  <div class="form-group">
    <label>PUKUL</label>
    <input type="time" id="timeslot" class="form-control" name="time" placeholder="Time" required>
  </div>
  <div class="form-group">
    <label>NOTES</label>
    <textarea type="text" name="notes" cols="3" rows="5" class="form-control" required></textarea>  
  </div>
  <button type="submit" name="submit" class="btn btn-dark">Submit</button>
</form>


<br><br><center><a class="text-dark" href="/events/{{ $date }}">Back</a></center>

@endsection