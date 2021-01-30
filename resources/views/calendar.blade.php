<style>
        .container {
            font-family: 'Noto Sans', sans-serif;
            margin-top: 10px;
        }
        h3 {
            margin-bottom: 20px;
        }
        th {
            height: 20px;
            text-align: center;
        }
        td {
            height: 20px;
        }
        .today {
            background: orange;
        }
        th:nth-of-type(1), td:nth-of-type(1) {
            color: red;
        }
        th:nth-of-type(7), td:nth-of-type(7) {
            color: blue;
        }
</style>
@extends('master')

@section('title', 'Calendar XII RPL B')

<!-- judul halaman -->
@section('judul halaman', 'Calendar XII RPL B')

<!-- Isi Konten -->
@section('konten')

        <h3><a href="?ym={{ $prev }}">&lt;</a> {{ $html_title }} <a href="?ym={{ $next }}">&gt;</a></h3>
        <div class="container"> 
            <table class="table table-bordered">
                <tr>
                    <th>S</th>
                    <th>M</th>
                    <th>T</th>
                    <th>W</th>
                    <th>T</th>
                    <th>F</th>
                    <th>S</th>
                </tr>
                  @foreach($weeks as $week)

                      <?php 
                        echo $week;
                      ?>

                  @endforeach
            </table>
            <p class="float-right">Klik pada tanggal untuk menambahkan acara!</p>

        </div><br><br>

        <!-- Semua Events -->

    <h3>Semua Events</h3>
    <div class="content float-center">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Acara</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Jam</th>
              <th scope="col">Notes</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>

            @foreach($event as $d)

            <tr>
              <th scope="row" class="text-dark">{{ $i++ }}</th>
              <td class="text-dark">{{ $d->title }}</td>
              <td>{{ date('d F Y', strtotime($d->date)) }}</td>
              <td>{{  $d->time }}</td>
              <td><?= $d->Notes ?></td>
              <td>
                 <button type="button" class="btn btn-light"><a class="text-dark" href="edit/{{ $d->id }}/{{ $d->date }}">Ubah</a></button>
                <button type="button" class="btn btn-dark"><a class="text-light" onclick="return confirm('Apakah anda yakin ingin mengahpus event {{ $d->title }}')" href="delete/{{ $d->id }}/{{ 0 }}">Hapus</a></button>
              </td>
            </tr>

            @endforeach

          </tbody>
        </table>
        <a class="float-right text-success" href="/export_excel" class="text-success">Export ke .xls</a>
        <center><a class="text-dark" href="/"> Kembali </a></center>
    </div>

<br><br>
@endsection