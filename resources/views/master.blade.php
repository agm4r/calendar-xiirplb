<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
  <!--  welcome css -->
    <title>@yield('title')</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">@yield('judul halaman')</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="/blog">Home</a>
        <a class="nav-link" href="/blog/profile">Profile</a>
        <a class="nav-link" href="/xiirplb/siswa">Siswa</a>
        <a class="nav-link" href="/blog/calendar">Calendar</a>
        <a class="nav-link" href="/blog/contact">Contact</a>
      </div>
    </div>
  </nav>
  </nav>

  <br><br>

<div class="container">
   <!--  bagian konten blog -->
   @yield('konten')
  
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
  </body>
</html>