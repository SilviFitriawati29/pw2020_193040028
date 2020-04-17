<?php
$host     = 'localhost';
$username = 'root';
$password = '';
$db       = 'tubes_193040028';
 // Melakukan koneksi ke database
 $conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");

 // Memilih database 
 mysqli_select_db($conn, $db) or die ("Database salah!");

 // query mengambil objek dari tabel didalam database
 $result = mysqli_query($conn, "SELECT * FROM buku");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5a</title>
</head>
<body>
    <h1><center> Daftar Buku </center> </h1>

    <table border= "1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Cover</th>
        <th>Judul</th>
        <th>Kategori</th>
        <th>Author</th>
        <th>Penerbit</th>
    </tr>
    <?php $i = 1 ;?>
            <?php while($row = mysqli_fetch_assoc($result)) : ?>
    <tr>
        <td><?= $row["id"]; ?></td>
        <td><img src="img/<?php echo $row["cover"]; ?>" width="60"></td>
        <td><?= $row["judul"]; ?></td>
        <td><?= $row["kategori"]; ?></td>
        <td><?= $row["author"]; ?></td>
        <td><?= $row["penerbit"]; ?></td>

    </tr>
    <?php $i++; ?>
         <?php endwhile; ?>
</body>
</html>