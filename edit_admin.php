<?php
include "koneksi.php";
$id= $_GET['id'];
$tampil = mysqli_query ($mysqli, "select * from admin where id='$id'");
$hasil= mysqli_fetch_array ($tampil);
?>
<head>
	<title>Halaman Edit</title>
		<style type="text/css">
		input[type=submit]{
	font-family: sans-serif;
	background: #e1ded1;
	border-radius: 3px;
	font-size: 10px;
	color: black;
	padding: 8px 10px;
	border: #e1ded1 solid ;
}
	fieldset {
				width: 25%;
				margin: 100px auto;
				border: 4px solid #5b5b5b;
				font-family: sans-serif;
			}
			legend {
				background: #e1ded1;
				margin-bottom: 10px;
				padding: 1em 1.5em;
				font-family: sans-serif;
			}
				input[type=submit]{
	font-family: sans-serif;
	background: #e1ded1;
	border-radius: 3px ;
	font-size: 10px;
	color: black;
	padding: 10px 15px;
	border: #e1ded1;

}
</style>
	<br>
</style>
<h3><center><b>AESTHETIC COMPETITION</b></center></h3>
<body style="background-image: url(kertas.jpg); background-size: cover;">
<form action="proses_edit.php" method="post">
	<fieldset>
		<legend align="center">Edit</legend>
		<table align="center" cellspacing="10" >
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="hidden" name="id" value="<?php echo $hasil['id']?>">
				<input type="text" name="nama" value="<?php echo $hasil['nama']?>">
			</td>
		</tr>
		<tr>
			<td>Tanggal Event</td>
			<td>:</td>
			<td> <input type="date" name="tanggal" value="<?php echo $hasil ['tanggal']?>"></td>
		</tr>
		<tr>
			<td>Informasi</td>
			<td>:</td>
			<td><input type="text"  name="informasi" value="<?php echo $hasil['informasi']?>"></textarea></td>
		</tr>
		<tr>
			<td></td></tr>
	</table>
			<p align="center"><input type="submit" name="kirim" value="KIRIM">
		</fieldset></form>