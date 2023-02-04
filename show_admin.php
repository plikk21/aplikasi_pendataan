<html>
<?php
include "koneksi.php";

?>

<head>
	<title>Halaman Admin</title>
</head>
<br>
	<body style="background-image: url(kertas.jpg); background-size: cover;">
			<center><p><h2>HALAMAN ADMIN</p></h2></p></center>
	<style>
		table,th,td{
			border width: 1px;
			border-style: solid;
			border-color: #5b5b5b;
			text-align: center;
			margin: 50px auto;
			border-collapse: collapse;

		}
		th {
		background-color: #9e968e;
		color: white;
	}
	td{
		background-color: #efefed;
	}
</style>

<div> <center> <a href="daftar_event.php"> + Tambah Daftar Event</a> <a href="show_peserta.php"> - Data Peserta Event</a>
</div>
<table cellpadding="10" width="60%">
	<tr>
		<th align="center">ID</th>
		<th align="center">NAMA</th>
		<th align="center">TANGGAL</th>
		<th align="center">INFORMASI</th>
		<th align="center">OPSI</th>
	</tr>
	<?php
	include "koneksi.php";
	$tampil = mysqli_query ($mysqli, "select * from admin");
	$no = 1;
	while ($hasil = mysqli_fetch_array($tampil)){
		?>
		<tr>
			<td align="center"><?php echo $no++; ?></td>
			<td align="center"><?php echo $hasil ['nama']?></td>
			<td align="center"><?php echo $hasil ['tanggal']?></td>
			<td align="center"><?php echo $hasil ['informasi']?></td>
			<td align="center"><a href="edit_admin.php?id=<?php echo $hasil ['id'];?>">Edit </a> | <a href="hapus_admin.php?hapus&id=<?php echo $hasil['id'];?>">Hapus</a></td>
		</tr>
		<?php
	}
	?>

</table>
 <center><a href="lobby.php">Logout</a></center></h4></center>
</body></html>
