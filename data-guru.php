<?php 
     include "conn.php";
     //data guru
     $query = mysqli_query($conn, "SELECT * FROM guru");
     if(isset($_POST["cari"])){
     	//Ambil data
     	$cari = $_POST["cari"];
     	$query = mysqli_query($conn , "SELECT * FROM guru WHERE nama LIKE '%$cari%' ");
     }else{
     	$query = mysqli_query($conn ,"SELECT * FROM guru");
     }

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Keseluruhan</title>
	<style>
		table{
			background-color: #f1f7ff;
		}
		.box{
			margin: 100px auto;
			width: 80%;
			overflow: auto;
		}
		.banner{
			width: 100%;
			height: 500px;
			background-image: url(img/e.jpg);
			background-size: 100% 100%;
		}

		.k{
			background-color: #f1f7ff;
		}
		.f{
			background-color: #f1f1f1;
		}
		

		
		.tambah{
			width: 80%;
			padding: 10px;
			background-color:  #f1f7ff;
			border-radius: 20px;
			box-shadow: 3px 3px 5px grey;
			margin: 0 0 15px 0;
		}
		@media (min-width: 700px ){
			.tambah{
				width: 40%;
			}
		}

	</style>
</head>
<body>
 <?php include "header.php"; ?>
 <div class="banner"></div>

<div class="box">
 	 <center><div class="tambah">
 	 	<h3 class="text-center">Data Keseluruhan Guru</h3>
 	<p>Belum ada data mu disni? Yuk...<a href="tambah-guru.php">Tambah</a></p>

 	<form action="" method="post">
 		<input type="text" name="cari" width="150">
        <button type="submit" class="btn btn-success">Cari data</button> 
 	</form>

 </div></center>

 	<center><table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Gambar</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Mapel</th>
			<th>Aksi</th>
		</tr>
		<?php $i = 1; ?>
		   <?php while($data = mysqli_fetch_array($query)): ?>
		   	<tr class="k">
		   		<td class="f"><?php echo $i; ?></td>
		   		<td><img src="img/<?php echo $data["gambar"]; ?> " width="100"></td>
		   		<td class="f"><?php echo $data["nama"]; ?></td>
		   		<td><?php echo $data["jk"]; ?></td>
		   		<td class="f"><?php echo $data["Mapel"]; ?></td>
		   		<td>
		   			<a style="color: red; font-weight: bold;" href="hapus-guru.php?id=<?php echo $data["id"]; ?> " onclick="return confirm('Yakin?'); ">Hapus</a>
		   			<a style="font-weight: bold;"href="ubah-guru.php?id=<?php echo $data["id"]; ?> ">, Ubah </a>
		   		</td>
		   	</tr>
		  <?php $i++; ?>
	    <?php endwhile; ?>
	</table></center>
 </div>
 <?php include "footer.php" ;?>
</body>
</html>