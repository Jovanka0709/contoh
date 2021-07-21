<?php
include "conn.php"; 
//Ambil data di url
$id = $_GET["id"];

$query = mysqli_query($conn, "DELETE FROM guru WHERE id = $id");

if(!$query){
	die(mysqli_error($conn));
}else{
	echo "<script>
        alert('Data berhasil di hapus');
        document.location.href='profil-guru.php';
	</script>";
}

 ?>