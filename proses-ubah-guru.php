<?php 
include "conn.php";
include "upload.php";

//Ambil data
$id = htmlspecialchars($_POST["id"]);
$nama = htmlspecialchars($_POST["nama"]);
$Mapel = htmlspecialchars($_POST["Mapel"]);
$jk =htmlspecialchars( $_POST["jk"]);
$gambarlama = htmlspecialchars( $_POST["gambarlama"]);

if($_FILES["gambar"]["error"] === 4){
	$gambar = $gambarlama;
}else{
	$gambar = upload();
}

$query = mysqli_query($conn, "UPDATE guru SET
                              nama = '$nama',
                              gambar = '$gambar',
                              Mapel = '$Mapel',
                              jk = '$jk'
                              WHERE id = $id
	");

if(!$query){
    die(mysqli_error($conn));	
}else{
	echo "<script>
         alert('Data Guru berhasil di Ubah');
         document.location.href='profil-guru.php';
	</script>";
}

 ?>