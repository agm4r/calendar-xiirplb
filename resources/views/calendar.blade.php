<style>
        .container {
            font-family: 'Noto Sans', sans-serif;
            margin-top: 10px;
        }
        h3 {
            margin-bottom: 30px;
        }
        th {
            height: 30px;
            text-align: center;
        }
        td {
            height: 100px;
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

<center><a class="text-dark" href="/blog"> Kembali </a></center>

<br><br>
@endsection