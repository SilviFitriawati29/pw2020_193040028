<?php
//koneksi ke database
$conn = mysqli_connect("localhost","root","","tubes_193040028" );

//ambil data dari tabel mahasiswa/query
$result = mysqli_query($conn, "SELECT * FROM buku")

//ambil data (fetch) mahasiswa dari object result
//mysqli_fetch_row() //mengembalikkan array numerik
//mysqli_fetch_assoc()//mengembalikkan array asosiatif
//mysqli_fetch_array() // mengembalikkan keduanya
//mysqli_fetch_object() //

//while ($mhs = mysqli_fetch_assoc($result) {
//var_dump($mhs);
//}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1> Daftar Buku </h1>

    <table border= "1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Cover</th>
        <th>Judul</th>
        <th>Kategori</th>
        <th>Author</th>
        <th>Penerbit</th>
    </tr>
    <?php $i = 1 ; ?>
    <?php while ($row = mysqli_fetch_assoc($result) ) : ?>
    <tr>
        <td><?= $i ?> </td>
        <td>
            <a href="">ubah</a> |
            <a href="">hapus</a>
        </td>
        <td><img src="img/<?php echo $row["cover"]; ?>" width="60"></td>
        <td><?= $row["judul"]; ?></td>
        <td><?= $row["kategori"]; ?></td>
        <td><?= $row["author"]; ?></td>
        <td><?= $row["penerbit"]; ?></td>

    </tr>
    <?php $i++; ?>
<?php endwhile ; ?>
</body>
</html>