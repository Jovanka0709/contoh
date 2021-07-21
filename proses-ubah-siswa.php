<?php 
include "conn.php";
include "upload.php";

//Ambil data
$id = htmlspecialchars($_POST["id"]);
$nama = htmlspecialchars($_POST["nama"]);
$mov = htmlspecialchars($_POST["motivasi"]);
$jk =htmlspecialchars( $_POST["jk"]);
$gambarlama = htmlspecialchars( $_POST["gambarlama"]);

if($_FILES["gambar"]["error"] === 4){
	$gambar = $gambarlama;
}else{
	$gambar = upload();
}

$query = mysqli_query($conn, "UPDATE siswa SET
                              nama = '$nama',
                              motivasi = '$mov',
                              gambar = '$gambar',
                              jk = '$jk'
                              WHERE id = $id
	");

if(!$query){
    die(mysqli_error($conn));	
}else{
	echo "<script>
         alert('Data berhasil di Ubah');
         document.location.href='profil-siswa.php';
	</script>";
}

 ?>