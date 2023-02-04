<html>
<head>
	<title>Login</title>
</head>
<body>
	<style type="text/css">
		input[type=submit]{
	font-family: sans-serif;
	background: #e1ded1;
	border-radius: 3px ;
	font-size: 15px;
	color: black;
	padding: 8px 10px;
	border: #e1ded1;

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
	</style>
	<body style="background-image: url(kertas.jpg); background-size: cover;" align="center"><br>
		<p align="center"><h2>HALAMAN LOGIN</h2></p>

	<form action="proses_login.php" method="post">
		
	<fieldset>
		<legend align="center">LOGIN</legend>
		<table align="center" cellpadding="8">
			<br>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan Username ..." required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan Password ..." required></td>
			</tr>
				<tr>
					<td><br></td></tr>		</table>
					<p align="center">
				<input type="submit" name="kirim" value="Login"></p>
</fieldset>
</form>
</body></html>


	
