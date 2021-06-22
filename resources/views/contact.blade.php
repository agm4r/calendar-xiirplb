@extends('master')

<!-- judul halaman -->
@section('judul halaman', 'Halaman Contact')

<!-- Isi Konten -->
@section('konten')

<!-- My Social Media -->
<div id="contact">
  <div class="container jumbroton">
    <div class="row text-center mb-5">
      <div class="col">
        <h2>My Social Media</h2>
      </div>
    </div>
    <div class="row justify-content-center fs-5 text-center">
      <div class="col-md-4 mb-5">
        <img src="img/ig.png" width="100" height="100">
        <h2><a href="https://instagram.com/agm4r" class="link text-dark">@agm4r</a></h2>
      </div>
      <div class="col-md-4 mb-5">
        <img src="img/fb.png" width="70" height="70" class="mb mb-3">
        <h2><a href="https://web.facebook.com/agmar.agmar.39" class="link text-dark">Agmar Putra</a></h2>
      </div>
      <div class="col-md-4 mb-5">
        <img src="img/github.png" width="100" height="100">
        <h2><a href="https://github.com/agm4r" class="link text-dark">@agm4r</a></h2>
      </div>
    </div>
  </div>
</div>

@endsection