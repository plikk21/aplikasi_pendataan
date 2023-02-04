<html>
<?php
	include "koneksi.php";

?>
<body style="background-image: url(kertas.jpg); background-size: cover;">
<head>
	<title>Data Peserta</title>
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
			button{
	font-family: sans-serif;
	background: #e1ded1;
	border-radius: 3px;
	font-size: 15px;
	color: black;
	padding: 8px 10px;
	border: #e1ded1 solid ;
}

</style>
</head>
<body><br>
	<center><h2><p>HALAMAN DATA PESERTA</p></h2></center>
	<table cellpadding="10" width="60%">
		<tr>
			<th align="center">ID</th>
			<th align="center">NAMA</th>
			<th align="center">EMAIL</th>
			<th align="center">TANGGAL LAHIR</th>
			<th align="center">ALAMAT</th>
		</tr>
		<?php
		include "koneksi.php";
		$tampil = mysqli_query ($mysqli, "select * from pendaftaran");
		$no= 1;
		while ($hasil = mysqli_fetch_array($tampil)){
		?>
		<tr>
			<td align="center"><?php echo $no++; ?></td>
			<td align="center"><?php echo $hasil ['nama']?></td>
			<td align="center"><?php echo $hasil ['email']?></td>
			<td align="center"><?php echo $hasil ['tanggal_lahir']?></td>
			<td align="center"><?php echo $hasil ['alamat']?></td>
		</tr>
		<?php
	}
?></table><br>
<center><a href="show_admin.php"><button>Kembali</button></a></center>

</body></html>