<?php
//menghubungkan dengan file php lainya
require 'php/functions.php';
//melakukan query
$buku = query("SELECT * FROM buku");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5b</title>
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
    <?php foreach($buku as $row) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td><img src="img/<?php echo $row["cover"]; ?>" width="60"></td>
        <td><?= $row["judul"]; ?></td>
        <td><?= $row["kategori"]; ?></td>
        <td><?= $row["author"]; ?></td>
        <td><?= $row["penerbit"]; ?></td>

    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</body>
</html>