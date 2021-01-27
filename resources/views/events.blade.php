@extends('master')

@section('title', 'Event XII RPL B')

<!-- judul halaman -->
@section('judul halaman', 'Events Siswa')

<!-- Isi Konten -->
@section('konten')


<h3>Events tanggal  {{  date("d F Y", strtotime($date)) }}</h3>

  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Acara</th>
      <th scope="col">Jam</th>
      <th scope="col">Notes</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach($event as $d)

    <tr>
      <th scope="row">{{ $i++ }}</th>
      <td>{{ $d->title }}</td>
      <td>{{  $d->time }}</td>
      <td>{{  $d->Notes }}</td>
      <td>
         <button type="button" class="btn btn-light"><a class="text-dark" href="edit/{{ $d->id }}">Ubah</a></button>
        <button type="button" class="btn btn-dark"><a class="text-light" onclick="return confirm('Apakah anda yakin ingin mengahpus event {{ $d->title }}')" href="delete/{{ $d->id }}/{{ $d->date }}">Hapus</a></button>
      </td>
    </tr>

    @endforeach

  </tbody>
</table>
<a class="text-dark" href="/blog/events/tambah/{{ $date }}">Tambah Events</a>

<br><br><center><a class="text-dark" href="/blog/calendar">Back</a></center>

@endsection