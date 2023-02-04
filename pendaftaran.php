<html>
<head>
	<title>Pendaftaran</title>

</head>
<body>
	<body style="background-image: url(kertas.jpg); background-size: cover;"><br>
		<center><h2><p>HALAMAN PENDAFTARAN </p></h2>
		</center>
	<form action="proses_pendaftaran.php" method="post">
		<style>
			fieldset {
				width: 50%;
				margin: 100px auto;
				border: 4px solid #5b5b5b;;
				font-family: sans-serif;
			}
			legend {
				background:  #e1ded1;
				padding: 1em 1em;
				margin-bottom: 20px;
			}
			input[type=submit],button {
				background:  #e1ded1;
				border-radius:#e1ded1;
				border-color: #e1ded1;
				color: black;
				padding: 5px 10px;

			}
		</style>
		<fieldset>
			<table width="40%" cellspacing="10" align="center"><br>
			<legend align="center">Pendaftaran</legend>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" placeholder="Masukkan Nama ..." required></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="email" name="email" placeholder="Masukkan Email ..." required></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="date" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir ..." required></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="alamat" cols="50" rows="5" placeholder="Masukkan Detail Alamat Anda ..." required></textarea></td>
			</tr>
			<tr>
				<td><br></td></tr></table>
		<p align="center">
				<input type="submit" name="kirim" value="Daftar"> 
	</form></fieldset></body></html>
