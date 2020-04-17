<?php
// Mengecaek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
}

require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];

// melakukan query dengan parameter id yang diambil dari url
$row = query("SELECT * FROM buku WHERE id = $id")[0];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5a</title>
</head>

<body>
    <h1> Detail Buku </h1>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>Cover</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Author</th>
            <th>Penerbit</th>
        </tr>

        <tr>
            <td><img src="../img/<?php echo $row["cover"]; ?>" width="60"></td>
            <td><?= $row["judul"]; ?></td>
            <td><?= $row["kategori"]; ?></td>
            <td><?= $row["author"]; ?></td>
            <td><?= $row["penerbit"]; ?></td>

        </tr>

</body>

</html>