<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">


    <title>Formulir Siswa</title>
  </head>
  <body>

    <div class="container valign">
        <h3>FORMULIR SISWA SMKN 4 PADALARANG</h3>
       <form action="/formulir/proses" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name='nama' id="nama" >
          </div>
          <div class="form-group">
            <label for="kelas">Kelas</label>
            <input type="text" class="form-control" name='kelas' id="kelas" >
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name='alamat' id="alamat" >
          </div>
          <div class="form-group">
            <label for="agama">Agama</label>
            <input type="text" class="form-control" name='agama' id="agama" >
          </div>
          <div class="form-group">
            <label for="tempatLahir">Tempat Lahir</label>
            <input type="text" class="form-control" name='tempatLahir' id="tempatLahir" >
          </div>
          <div class="form-group">
            <label for="tglLahir">Tanggal Lahir</label>
            <input type="text" class="form-control" name='tglLahir' id="tglLahir" >
          </div>
          <button type="submit" class="btn btn-dark text-primary ">Submit</button>
        </form>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
  </body>
</html>
