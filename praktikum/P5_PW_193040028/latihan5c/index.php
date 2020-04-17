<?php
//menghubungkan dengan file php lainya
require 'php/functions.php';
//melakukan query
$buku = query("SELECT * FROM buku")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5c</title>
</head>
<body>
<body>
    <h1><center>DAFTAR BUKU</center></h1>
        <div class = "container">
            <?php foreach ($buku as $row) : ?>
                <div class = "nama">
                        <a href="php/detail.php?id=<?= $row['id']; ?>"> 
                            <?= $row["judul"]; ?>
                        </a>
                </div>
            <?php endforeach; ?>
        </div>
  
</body>
</html>