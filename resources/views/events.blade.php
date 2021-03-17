@extends('master')

@section('title', 'Event XII RPL B')

<!-- judul halaman -->
@section('judul halaman', 'Events Siswa')

<!-- Isi Konten -->
@section('konten')


<h3 class="jumbroton">Events tanggal  {{  date("d F Y", strtotime($date)) }}</h3>

  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Acara</th>
      <th scope="col">Jam</th>
      <th scope="col">Notes</th>
      <th scope="col">Pembuat</th>
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
      <td>{{  $d->name }}</td>
      <td>
         <button type="button" class="btn btn-light">
          <a class="text-dark" href="edit/{{ $d->id_event }}/{{ $mark = 0}} ">Ubah</a>
        </button>
         @if($d->id_user == Auth::user()->id)
          <button type="button" class="btn btn-dark">
            <a class="text-light" onclick="return confirm('Apakah anda yakin ingin mengahpus event {{ $d->title }}')" href="delete/{{ $d->id_event }}/{{ $d->date }}">Hapus</a>
          </button>
          @else
          <button type="button" class="btn btn-dark">
            <a class="text-light" onclick="return alert('Maaf anda tidak bisa menghapus data ini.')" href="#">Hapus</a>
          </button>
          @endif
      </td>
    </tr>

    @endforeach

  </tbody>
</table>
<a class="text-dark" href="/events/tambah/{{ $date }}">Tambah Events</a>

<br><br><center><a class="text-dark" href="/calendar">Back</a></center>

@endsection