<?php 
include "conn.php";
include "upload.php";

//ambil data
$nama = htmlspecialchars($_POST["nama"]);
$Mapel = htmlspecialchars($_POST["Mapel"]);
$jk = htmlspecialchars($_POST["jk"]);
$gambar = upload();
if(!$gambar){
	return false;
}

$query = mysqli_query($conn, "INSERT INTO guru VALUES('', '$nama', '$gambar', '$Mapel', '$jk') ");

if(!$query){
	die(mysqli_error($conn));
}else{
	echo "<script>
         alert('Data Guru berhasil di tambahkan');
         document.location.href='profil-guru.php';
	</script>";
}

 ?>