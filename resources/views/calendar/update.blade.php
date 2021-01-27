@extends('master')

@section('title', 'Edit Events')

<!-- judul halaman -->
@section('judul halaman', 'Edit Event')
 
<!-- Isi Konten -->
@section('konten')

  @foreach( $events as $d )

  <form action="/blog/events/update" method="post">
    {{ csrf_field() }}
  <div class="form-group">
    <label>ID</label>
    <input type="text" class="form-control" name="id" value="{{ $d->id }}" readonly>
  </div>
  <div class="form-group">
    <label>JUDUL</label>
    <input type="text" class="form-control" name="title" value="{{ $d->title }}">
  </div>
  <div class="form-group">
    <label>DATE</label>
    <input type="date" class="form-control" name="date" value="{{ $d->date }}" readonly>
  </div>
   <div class="form-group">
    <label>PUKUL</label>
   <input type="time" id="timeslot" class="form-control" name="time" value="{{ $d->time }}" required>
  </div>
   <div class="form-group">
    <label>NOTES</label>
    <input type="text" class="form-control" name="notes" value="{{ $d->Notes }}">
  </div>
  <button type="submit" name="submit" class="btn btn-dark">Submit</button>
</form>

@endforeach

<br><br><center><a class="text-dark" href="/blog/calendar">Back</a></center>

@endsection