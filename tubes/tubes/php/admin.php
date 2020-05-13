<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
//menghubungkan dengan file php lainya
require 'functions.php';
//melakukan query
$buku = query("SELECT * FROM buku");
// ketika tombol cari diklik
if (isset($_POST['cari'])) {
  $buku = cari($_POST['keyword']);
}

?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    body {
      background: url('../img/background.jpg');
    }

    .btn-primary {
      background-color: #795548;
      border: 1px solid #6d4c41;
    }

    .btn-primary:hover {
      background-color: #6d4c41;
      border: 1px solid #795548;
    }

    .btn-primary:focus {
      background-color: #6d4c41;
      border: 1px solid #795548;
    }
  </style>
  <title>Halaman Admin</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #795548 ">

    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img src="../img/icon.png" width="30" height="30" alt="">
        Admin
      </a>

      <div class="collapse navbar-collapse order-1" id="navbarTogglerDemo03">
        <form class="form-inline my-2 my-lg-0" method="POST">
          <div class="input-group ">
            <input type="text" class="form-control" placeholder="Search free books" name="keyword" size="60" autocomplete="off">
            <div class="input-group-append">
              <button class="btn btn-light" type="submit" name="cari">Search</button>
            </div>
          </div>
        </form>

        <div class="navbar-collapse w-100 order-2 dual-collapse2">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link btn btn-danger" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <ul class="nav text-light " style="background-color: #6d4c41">
    <li class="nav-item">
      <a class="nav-link">Featured </a>
    </li>
    <li class="nav-item">
      <a class="nav-link">|</a>
    </li>
    <li class="nav-item mr-5">
      <a class="nav-link">History</a>
    </li>
    <li class="nav-item mr-5">
      <a class="nav-link">Romance</a>
    </li>
    <li class="nav-item mr-5">
      <a class="nav-link">Adventure</a>
    </li>
    <li class="nav-item mr-5">
      <a class="nav-link">Horror</a>
    </li>
    <li class="nav-item mr-5">
      <a class="nav-link">Fantasy</a>
    </li>
    <li class="nav-item mr-5">
      <a class="nav-link">Short Story</a>
    </li>
    <li class="nav-item mr-5">
      <a class="nav-link">Political</a>
    </li>
    <li class="nav-item mr-5">
      <a class="nav-link">Historical Fiction</a>
    </li>
  </ul>
  <h1>
    <center> Daftar Buku </center>
  </h1>
  <div class="container-fluid">
    <div class="add">
      <a class="btn btn-primary" href="tambah.php">Tambah Data</a>
    </div>
    <table class="table mt-3">
      <thead class="" style="background-color: #6d4c41; color: white;">
        <tr>
          <th>No.</th>
          <th>Opsi</th>
          <th>Cover</th>
          <th>Judul</th>
          <th>Kategori</th>
          <th>Author</th>
          <th>Penerbit</th>
        </tr>
      </thead>
      <tbody>
        <?php if (empty($buku)) : ?>
          <tr>
            <td colspan="7">
              <h1 style="color: red; font-style: italic;">Data tidak ditemukan</h1>
            </td>
          </tr>
        <?php endif; ?>
        <?php $i = 1; ?>
        <?php foreach ($buku as $row) : ?>
          <tr>
            <td><?= $i++; ?></td>
            <td>
              <a class="btn btn-primary" href="ubah.php?id=<?= $row['id']; ?>">ubah</a>
              <a class="btn btn-danger" href="hapus.php?id=<?= $row['id']; ?> " onclick="return confirm('apakah anda yakin?');">hapus</a>
            </td>
            <td><img src="../img/<?php echo $row["cover"]; ?>" width="60"></td>
            <td><?= $row["judul"]; ?></td>
            <td><?= $row["kategori"]; ?></td>
            <td><?= $row["author"]; ?></td>
            <td><?= $row["penerbit"]; ?></td>

          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>