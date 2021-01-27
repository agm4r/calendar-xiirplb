<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">


    <title>biodata Siswa</title>
  </head>
  <body>

    <div class="container valign">
        <h3>FORMULIR SISWA SMKN 4 PADALARANG</h3>
       <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">{{ $nama }}</li>
          <li class="list-group-item">{{ $kelas }}</li>
          <li class="list-group-item">{{ $alamat }}</li>
          <li class="list-group-item">{{ $agama }}</li>
          <li class="list-group-item">{{ $tempatLahir }}</li>
          <li class="list-group-item">{{ $tglLahir }}</li>
        </ul>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
  </body>
</html>
