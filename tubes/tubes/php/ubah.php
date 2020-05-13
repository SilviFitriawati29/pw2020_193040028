<?php
require 'functions.php';

$id = $_GET['id'];
$row = query("SELECT * FROM buku WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
              alert('Data Berhasil diubah!');
              document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
              alert('Data Gagal diubah!');
              document.location.href = 'admin.php';
          </script>";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
  <title>Form Ubah Buku</title>
</head>

<body>
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-6">
        <h1>Form Ubah Buku</h1>
        <div class="card">
          <div class="card-body">
            <form action="" method="POST">
              <input type="hidden" name="id" id="id" value="<?= $row['id']; ?>">
              <div class="form-group">
                <label>Judul</label>
                <input type="text" class="form-control" placeholder="Judul" name="judul" autofocus required value="<?= $row['judul']; ?>">
              </div>
              <div class="form-group">
                <label>Kategori</label>
                <input type="text" class="form-control" placeholder="Kategori" name="kategori" required value="<?= $row['kategori']; ?>">
              </div>
              <div class="form-group">
                <label>Author</label>
                <input type="text" class="form-control" placeholder="Author" name="author" required value="<?= $row['author']; ?>">
              </div>
              <div class="form-group">
                <label>Penerbit</label>
                <input type="text" class="form-control" placeholder="Penerbit" name="penerbit" required value="<?= $row['penerbit']; ?>">
              </div>
              <div class="form-group">
                <label>Cover</label>
                <input type="text" class="form-control" placeholder="Cover" name="cover" required value="<?= $row['cover']; ?>">
              </div>
              <button type="submit" class="btn btn-primary" name="ubah">Ubah Data</button>
              <a class="btn btn-secondary" href="admin.php">Kembali</a>

            </form>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>