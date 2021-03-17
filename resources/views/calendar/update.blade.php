@extends('master')

@section('title', 'Edit Events')

<!-- judul halaman -->
@section('judul halaman', 'Edit Event')
 
<!-- Isi Konten -->
@section('konten')

  @foreach( $events as $d )

  <form action="/events/update/{{ $mark }}" method="post">
    {{ csrf_field() }}
  <div class="form-group">
    <label>ID</label>
    <input type="text" class="form-control" name="id" value="{{ $d->id_event }}" readonly>
  </div>
  <div class="form-group">
    <label>JUDUL</label>
    <input type="text" class="form-control" name="title" value="{{ $d->title }}">
  </div>
  <div class="form-group">
    <label>DATE</label>
    @if($mark == 0)
      <input type="date" class="form-control" name="date" value="{{ $d->date }}" readonly>
    @else
      <input type="date" class="form-control" name="date" value="{{ $d->date }}">
    @endif
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

<br><br><center><a class="text-dark" href="/events/{{ $d->date }}">Back</a></center>
@endforeach

@endsection