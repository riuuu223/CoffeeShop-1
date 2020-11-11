<html>
<head>
<title>Halaman <?php echo $data['judul']; ?></title>
<link rel="stylesheet" href='http://localhost:8080/CoffeeShop-1/public/css/bootstrap.css'>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="<?php echo MYURL; ?>">Coffee Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo MYURL; ?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo MYURL; ?>/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo MYURL; ?>/karyawan">Karyawan</a>
        </li>
      </ul>
  </div>
</nav>