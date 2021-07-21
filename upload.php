<?php 
function upload(){
	$namafile = $_FILES["gambar"]["name"];
	$error = $_FILES["gambar"]["error"];
	$tmpname = $_FILES["gambar"]["tmp_name"];
	$size = $_FILES["gambar"]["size"];

	if($error === 4 ){
		echo "<script>
            alert('Pilih Gambar Terlebih dahulu');
            document.location.href='index.php';
		</script>";
		return false;
	}

	$ekstensiGambarValid = ["jpg","jpeg","png"];
	$ekstensiGambar = explode('.' , $namafile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if(!in_array($ekstensiGambar, $ekstensiGambarValid) ){
		echo "<script>
            alert('Yang Anda Upload Bukan File');
            document.location.href='index.php';
		</script>";
		return false;
	}
//Agar tidak ada gambar yang ketimpa
	$namafilebaru = uniqid();
	$namafilebaru .= '.';
	$namafilebaru .= $ekstensiGambar;

	move_uploaded_file($tmpname, 'img/' . $namafilebaru);
	return $namafilebaru;
}

 ?>