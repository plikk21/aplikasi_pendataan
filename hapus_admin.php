<?php
//Tombol harus ditekan
include "koneksi.php";
if(isset($_GET ['hapus'])){
	$id=$_GET ['id'];
	$hapus = mysqli_query ($mysqli,"DELETE FROM admin WHERE id='$id'");
	if($hapus){
		header ("location:show_admin.php");
	}else{
		echo "<script>
		alert('Maaf, data tersebut masih terhubung dengan data yang lain'); </script>";
	}
}
?>