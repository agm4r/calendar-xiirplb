<style>
        .container {
            font-family: 'Noto Sans', sans-serif;        }
        h3 {
            margin-bottom: 30px;
        }
        th {
            height: 20px;
            text-align: center;
        }
        td {
            height: 10px;
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

<!-- judul halaman -->
@section('judul halaman', 'Halaman Home')

<!-- Isi Konten -->
@section('konten')

            <div class="content float-left">
                <div class="title m-b-md">
                    Welcome
                </div>
                <div>
                    <h4> Selamat Datang di Web Kalender XII RPL B </h4>
                </div>
                <div>
                    <span>AGMAR | XII RPL B</span>
                </div>
            </div>
            <div class="content float-right">
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
            <center><a class="text-dark" href="/calendar"> Tambah Acara? </a></center>
            <br><br>
            </div>
        </div>

@endsection
