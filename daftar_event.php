<html>
<head>
	<title>Pendaftaran Event</title>
</head>
<body>

	<body style="background-image: url(kertas.jpg); background-size: cover;">
	<form action="proses_admin.php" method="post"><br>
 <center><h2>HALAMAN PENAMBAHAN EVENT</h2> </center>
	
<style >
			fieldset {
				width: 50%;
				margin: 100px auto;
				border: 4px solid #5b5b5b;
			}
			legend {
				background: #e1ded1;
				margin-bottom: 20px;
				padding: 1em 1em;
			}
					input[type=submit],a,button{
					font-family: sans-serif;
					background: #e1ded1;
					border-radius: 3px;
					font-size: 12px;
					color: black;
					padding: 8px 10px;
					border: #e1ded1 solid ;
			}

			</style>
<fieldset>
	<legend align="center">TAMBAH EVENT</legend>
	<table width="80%" cellspacing="10" >
		<tr>
			<td>Nama Event</td>
			<td>:</td>
			<td><input type="text" name="nama" placeholder="Masukkan Nama ..." ></td>
		</tr>
		<tr>
			<td>Tanggal Event</td>
			<td>:</td>
			<td><input type="date" name="tanggal" placeholder="Masukkan Tanggal Event ..." ></td>
		</tr>
		<tr>
			<td>Informasi</td>
			<td>:</td>
			<td><textarea name="informasi" cols="50" rows="5" placeholder="Masukkan Informasi Mengenai Event Anda ..." ></textarea>
	</td></tr><tr><td></td></tr> </table><p align="center">
<input type="submit" name="kirim" value="Tambah">   	
		</fieldset>
</form></body></html>