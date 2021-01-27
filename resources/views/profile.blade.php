@extends('master')

<!-- judul halaman -->
@section('judul halaman', 'Halaman Profile')

<!-- Isi Konten -->
@section('konten')

 <div id="wrapper">
        <div class="card" style="width: 21rem;">
          <img src="{{URL::asset('/img/agmar.jpg')}}" height="350">
          <div class="card-body">
            <h5 class="card-title">Agmar Putra</h5>
            <p class="card-text">Halo saya siswa di SMKN 4 Padalarang dengan Kelas XII RPL B</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">04 Januari 2003</li>
            <li class="list-group-item">Cisarua, Jawa Barat, Indonesia</li>
            <li class="list-group-item">agmarputra@gmail.com</li>
          </ul>
        </div>
    </div>  

@endsection