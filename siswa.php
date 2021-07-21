<!DOCTYPE html>
<html>
<head>
	<title>Tambah</title>
	<link rel="stylesheet" type="text/css" href="bs/css/bootstrap.min.css">
	<style>
		*{
			padding: 0;
			margin: 0;
		}

		body{
			background-color: #ddd;
		}

		.box{
			border: 1px solid grey;
			margin: 70px auto;
			width: 80%;
			padding: 30px;
			border-radius: 30px;
			background-color:  #f1f7ff;;
			box-shadow: 5px 5px 3px grey;
		}
		.btn.btn-primary{
			width: 100%;
		}

		@media (min-width: 700px){
			.box{
				width: 40%;
			}
		}

	</style>
</head>
<body>
	<?php include "header.php"; ?>
	<div class="box">
		<center><h3>Tambah Data Siswa/i</h3></center>
		<form action="proses-tambah-siswa.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama:</label>
				<input type="text" name="nama" class="form-control" required="" autofocus="" placeholder="Input Your Username...">
			</div>

			<div class="form-group">
				<label>Motivasi:</label>
				<textarea name="motivasi" required=""></textarea>
			</div>

			<div class="form-group">
				<label>Gambar:</label>
				<input type="file" name="gambar" class="form-control" required="">
			</div>

			<div class="form-group">
				<input type="radio" name="jk" value="laki-laki" required="">Laki-Laki
				<input type="radio" name="jk" value="perempuan" required="">Perempuan
			</div>

			<button type="submit" class="btn btn-primary">Submit Now!</button>
			<br><br>
			<p class="text-center">Kembali ke <a href="profil-siswa.php">Profile</a></p>
		</form>
	</div>
	<br><br>
	<?php include "footer.php" ;?>
</body>
</html>