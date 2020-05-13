<!DOCTYPE html>
<html>

<head>
	<title>INDEX</title>
	<link rel="stylesheet" href="index.css">
</head>

<body>
	<h1>
		<marquee bgcolor="lightskyblue">SELAMAT DATANG </b></marquee>
	</h1>
	<br>
	<img src="logo.jpg" width="100" height="100">
	<div class="footer">
		<p>UNTUK MEMPERMUDAH KALIAN DALAM MENGUNJUNGI HALAMAN WEB INI SILAHKAN KLIK TOMBOL DIBAWAH INI!!!</p>
	</div>
	<br>
	<table border="6" align="center" width="65%" cellspacing="12" cellpadding="5" <tr bgcolor="white">
		<td bgcolor="lightskyblue" colspan="8" align="center"><b>INDEX KULIAH</b></td>
		</tr>
		<tr>
			<td align="center"><b>NO.</b></td>
			<td align="center"><b>LINK</b></td>
			<td align="center"><b>TUGAS</b></td>

		</tr>

		<?php $i = 1;
		for ($no = 9; $no <= 13; $no++) : ?>
			<tr>
				<td align="center"><?= $i; ?>.</td>
				<td><a href="kuliah/pertemuan<?= $no; ?>">Klik Disini</a></td>
				<td align="center">Pertemuan<?= $no; ?></td>
			</tr>
		<?php $i++;
		endfor; ?>
		</tr>
	</table>
	<br>
	<table border="6" align="center" width="65%" cellspacing="12" cellpadding="5" <tr bgcolor="white">
		<td bgcolor="lightskyblue" colspan="8" align="center"><b>INDEX PRAKTIKUM</b></td>
		</tr>
		<tr>
			<td align="center"><b>NO.</b></td>
			<td align="center"><b>LINK</b></td>
			<td align="center"><b>TUGAS</b></td>

		</tr>

		<?php $i = 1;
		for ($no = 5; $no <= 7; $no++) : ?>
			<tr>
				<td align="center"><?= $i; ?>.</td>
				<td><a href="praktikum/P<?= $no; ?>_PW_193040028">Klik Disini</a></td>
				<td align="center">P<?= $no; ?>_PW_193040028</td>
			</tr>
		<?php $i++;
		endfor; ?>
		</tr>
	</table>
	<br>
	<table border="6" align="center" width="65%" cellspacing="12" cellpadding="5" <tr bgcolor="white">
		<td bgcolor="lightskyblue" colspan="8" align="center"><b>INDEX TUBES</b></td>
		</tr>
		<tr>
			<td align="center"><b>NO.</b></td>
			<td align="center"><b>LINK</b></td>
			<td align="center"><b>TUGAS</b></td>

		</tr>
		<tr>
			<td align="center">1.</td>
			<td><a href="tubes/tubes">Klik Disini</a></td>
			<td align=" enter">TUBES</td>
		</tr>

		</tr>
	</table>
</body>

</html>