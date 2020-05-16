 <?php
 session_start();

 if (!isset($_SESSION['login'])) {
   header("Location: login.php");
   exit;
 }

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// ketika tombol cari diklik
if (isset($_POST['cari'])) {
  $mahasiswa = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mahasiswa</title>
  <style>
    img {
      width: 100px;
      height: 100px;
    }
  </style>
</head>

<body>
  <a href="logout.php">Logout</a>
  <h3>Daftar Mahasiswa</h3>

  <h3><center> Daftar Mahasiswa </center> </h3>
  <a href="tambah.php">Tambah Data Mahasiswa</a>
  <br>
</body>
<br>
<form action="" method="POST">
    <input type="text" name="keyword" size="40" placeholder="masukan keyword pencarian.." autocomplete="off" autofocus class="keyword">
    <button type="submit" name="cari" class="tombol-cari">Cari!</button>
  </form>
  <br>

  <div class="container">

  <table border="1" cellpadding="10" cellspacing="0" >
    <tr>
    <th>#</th>
    <th>Gambar</th>
    <th>Nama</th>
    <th>Aksi</th>
    </tr>

    <?php if (empty($mahasiswa)) : ?>
      <tr>
        <td colspan="4">
          <p style="color: red; font-style: italic;">Data Mahasiswa Tidak Ditemukan!</p>
        </td>
      </tr>
    <?php endif; ?>

    <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>
      <tr>
   <td><?= $i++; ?></td>
   <td><img src="img/hihi.jpg" width="50"></td>
   <td><?=$m['nama'];?></td>
   
   <td>
     <a href="detail.php?id=<?= $m['id']; ?>">lihat detail</a> |
   </td>
  </tr>
   <?php endforeach; ?>
</table>
  </div>

  <script src="js/script.js"></script>
</body>

</html>