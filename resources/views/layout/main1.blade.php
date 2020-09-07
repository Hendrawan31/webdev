<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>@yield('judul')</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">

    <!-- Bootstrap core CSS -->
<link href="../../assets/dist/css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>
  <body>
    <header>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">


<a class="navbar-brand" href="/">HOME</a>


<button class="navbar-toggler" type="button" 


                data-toggle="collapse" data-target="#navbarNavAltMarkup" 


                aria-controls="navbarNavAltMarkup" aria-expanded="false" 


                aria-label="Toggle navigation">


<span class="navbar-toggler-icon"></span>


</button>


<div class="collapse navbar-collapse" id="navbarNavAltMarkup">


<div class="navbar-nav">


<a class="nav-item nav-link" href="/anggota">Anggota</a>


<a class="nav-item nav-link" href="/kategori">Kategori Buku</a>


<a class="nav-item nav-link" href="/buku">Daftar Buku</a>


<a class="nav-item nav-link" href="/transaksi">Transaksi</a>



</div>


</nav>


</div>

</header>

<main role="main">

  @yield('content')


</main>

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to top</a>
    </p>
    <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
    <p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="../getting-started/introduction/">getting started guide</a>.</p>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script></body>
</html>
