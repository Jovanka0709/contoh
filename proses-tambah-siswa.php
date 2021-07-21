<?php 
include "conn.php";
include "upload.php";

//ambil data
$nama = htmlspecialchars($_POST["nama"]);
$mov = htmlspecialchars($_POST["motivasi"]);
$jk = htmlspecialchars($_POST["jk"]);
$gambar = upload();
if(!$gambar){
	return false;
}

$query = mysqli_query($conn, "INSERT INTO siswa VALUES('', '$nama', '$mov', '$gambar', '$jk') ");

if(!$query){
	die(mysqli_error($conn));
}else{
	echo "<script>
         alert('Data berhasil di tambahkan');
         document.location.href='profil-siswa.php';
	</script>";
}

 ?>