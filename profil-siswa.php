<?php 
include "conn.php";

$sql = mysqli_query($conn, "SELECT * FROM siswa");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Profil Siswa</title>
	<link rel="stylesheet" type="text/css" href="bs/css/bootstrap.min.css">
	<style>
		*{
			padding: 0;
			margin: 
		}
		.banner{
			width: 100%;
			height: 500px;
			background-image: url(img/u.jpg);
			background-size: 100% 100%;
		}
		.tambah{
			width: 80%;
			padding: 10px;
			background-color:  #f1f7ff;
			border-radius: 20px;
			box-shadow: 3px 3px 5px grey;
			margin: 0 0 -50px 20px;
		}
		.container{
			width: 100%;
			margin: 100px auto;
			display: flex;
			justify-content: space-around;
			flex-wrap: wrap;
		}
		.box{
			width:80%;
			border:1px solid grey;
			border-radius: 30px;
			overflow: hidden;
			margin: 0 0 30px 0;
		}
		.gam{
			width: 100%;
			height: 200px;
		}
		.content{
			width: 100%;
			padding: 10px;
			border-radius: 20px;
		}

		h3,p{
		overflow: auto;	
		}
		.btn.btn-primary{
			width: 100%;
		}
		.btn.btn-danger{
			width: 100%;
			margin: 0 0 5px 0
		}
		.border{
			border:1px solid grey;
		}

		.tex{
			white-space: normal;
		}

		@media (min-width: 700px){
			.box{
				width: 30%;
			}
			.tambah{
				width: 30%;
			}
		}
	</style>
</head>
<body>
	<?php include "header.php"; ?>

	<div class="banner"></div>
	<br>


<center><div class="tambah">
	<h3 class="text-center">Profil Data Siswa/i</h3>
 	<p>Belum ada profil mu disni? Yuk...<a href="siswa.php">Tambah</a></p>
 </div></center>


	<div class="container">
 		<?php while($data1 = mysqli_fetch_array($sql)): ?>
 			<div class="box">
 				<img src="img/<?php echo $data1["gambar"]; ?> " class="gam">

 				<div class="content">
 					<h3 class="text-center"><?php echo $data1["nama"]; ?></h3>
 					<h5 > Jenis Kelamin : <?php echo $data1["jk"]; ?></h5>
 					<p class="tex">Mov : <?php echo $data1["motivasi"]; ?></p>
 				    <br>
 				    <a href="hapus.php?id=<?php echo $data1["id"]; ?> " onclick="return confirm('Apakah kamu yakin?');">
 					<button type="submit" class="btn btn-danger">Hapus data</button>
 				    </a>
 				    <br>
 				    <a href="ubah-siswa.php?id=<?php echo $data1["id"]; ?> ">
 					<button type="submit" class="btn btn-primary">Ubah data</button>
 				    </a>
 				</div>
 				
 			</div>
 		<?php endwhile; ?>
 	</div>
 	<?php include "footer.php" ;?>
</body>
</html>