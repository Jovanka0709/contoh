<!DOCTYPE html>
<html>
<head>
	<title>Jovanka AL</title>
  <link rel="stylesheet" type="text/css" href="bs/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" type="text/css" href="font/css/all.min.css">
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" >e-RPL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Gallery
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="profil-siswa.php">Profil Siswa</a>
          <a class="dropdown-item" href="profil-guru.php">Profil Guru</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="ajsiaj.html">Profil Bersama</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Data RPL
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="data-siswa.php">Siswa/i</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="data-guru.php">Wali Kelas</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      
    </form>
  </div>
</nav>

   <div class="container-satu">
      <div class="left">
         <div class="leftauto">
          <br>
            <h1>Story of<br>RPL</h1>
            <br>
            <p>e-RPL adalah Aplikasi System Informasi Mengenai History/Kenangan Di Bidang Jurusan RPL(Rekayasa Perangkat Lunak), <br><br>Dan user bisa Mengetahui Story Kenangan Alumni jurusan RPL tsb, Seperti Prestasi,Pengalaman dll. </p>
            <br>
           <div class="bb">
              <button style="color:white;" class="a">Home</button> 
              <a href="profil-siswa.php"><button class="b">Profil Siswa</button></a>
           </div>
         </div>
      </div>
      <div class="right">
         <div class="gambar"></div>
      </div>
   </div>
   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <?php include "footer.php"; ?>  
</body>
</html>