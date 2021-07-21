<?php 
  include "conn.php";

  $id= $_GET["id"];
  $query = mysqli_query($conn, "SELECT * FROM guru WHERE id = $id");
  $data = mysqli_fetch_array($query);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Profil Guru</title>
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
			margin: 60px auto;
			width: 90%;
			padding: 30px;
			border-radius: 30px;
			background-color: #f1f7ff;
			box-shadow: 5px 5px 3px grey;
		}
		.btn.btn-primary{
			width: 100%;
		}

		@media (min-width: 650px){
			.box{
				width: 40%;
			}
		}

	</style>
</head>
<body>
	<?php require "header.php"; ?>
	<div class="box">


		<center><h3>Update your profil </h3></center>
		<form action="proses-ubah-guru.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $data["id"]; ?>">
			<input type="hidden" name="gambarlama" value="<?php echo $data["gambar"]; ?>">
			<div class="form-group">
				<label>Nama:</label>
				<input type="text" name="nama" required=""  class="form-control" value="<?php echo $data["nama"]; ?> " >
			</div>

			<div class="form-group">
				<label>Mapel:</label>
				<input type="text" name="Mapel" class="form-control" required="" value="<?php echo $data["Mapel"]; ?> " size="70px" >
			</div>


			<div class="form-group">
				<label>Gambar:</label>
				<img src="img/<?php echo $data["gambar"]; ?> " width="100">
				<input type="file" name="gambar" class="form-control">
			</div>

			<div class="form-group">
				<input type="radio" name="jk" value="laki-laki" required="">Laki-Laki
				<input type="radio" name="jk" value="perempuan" required="">Perempuan
			</div>

			<button type="submit" class="btn btn-primary">Submit Now!</button>
			<br><br>
			<p class="text-center">Kembali ke halaman <a href="profil-guru.php">Profil</a></p>
		</form>
	</div>
	<br><br><br>
	<?php include "footer.php" ;?>
</body>
</html>