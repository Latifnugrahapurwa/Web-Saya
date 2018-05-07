<?php
require 'proses_berita.php';
$artikel = query("SELECT * FROM artikel ORDER BY ID DESC");
?>

<html>
<head>
	<title>webdesa</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>

<style media="screen">
body{
	background-image: url('PICTURES/39f310fd_TESV-2012-07-11-01-35-56-57.jpg');
	background-size:cover;
}
h2{color: white;}
p{color: white;}
	.jumbotron{
		box-shadow: 0 0 30px grey;
		background: none;
		background-size: cover;
	}

  .thumbnail{

    box-shadow: 0 0 30px grey;
		background: rgb(30, 30, 30);
		background-size: cover;
  }

	#button:hover{
		transition: 3s;
		transform: scale(1.5);
	}
	.box h3 {
		color: white!important;
	}
	.tambah{
		border-radius: 15px;
		height: 40px;
		transform:translate(90px, -40px);
		background: white;
		transition: 5s
	}
	.tambah > a{
		margin-top: 20px;
		text-decoration: none;
		color: orange;
	}
	.tambah:hover{
		cursor: pointer;
		color: black;
		transition: 5s;
	}
</style>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
            <div id="menu">
			<ul class="nav navbar-nav ">
				<li><a href="beranda.php">Beranda</a> </li>
                <li><a href="Desa.php">Desa</a> </li>
                <li><a href="Content.php">Content</a> </li>
                <li><a href="Video/Video%20Audio.html">Video Audio</a> </li>
                <li><a href="konten.php">Update</a> </li>
                <li><a href="tentang.php">Tentang</a> </li>
			</ul>
            </div>
			<ul class="nav navbar-nav navbar-right">
				<li style="float:right" onclick="return confirm('Yakin untuk LOG-OUT?')"> <a href="index.php">Log-out</a></li>
			</ul>
		</div>
	</nav>

  	<div class="container" style="margin-top: 80px;">

          <section id="main" >
            <div class="conatiner"  style="transform:translatey(-50px);">
              <h1 class="page-title" style="color:white; font-size:50px">Konten dan Berita</h1>
							<h3 class="tambah" style="margin-left:950px; border:0px solid black; text-align:center; line-height : auto; height: auto; padding : 5px; background : linear-gradient(to bottom right, rgb(25, 25, 25), rgb(150, 150, 150));">
							  <a href="Tambah_berita.php">Tambah Berita</a>
							</h3>
								<article class="jumbotron thumbnail" id="main-col">
                    <?php $i = 1; foreach ( $artikel as $row ) : ?>
                      <?php if ($i == 1): ?>
                        <div class="box">
                          <!-- <img src="" alt=""> -->
                          <h3><?= $row["Judul"]; ?></h3>
                          <p>Di tulis oleh : <?= $row["Penulis"];  ?></p><hr>
                          <p><?= substr($row["Isi"],0, 40);  ?>....</p>
                          <a href="klikberita.php?ID=<?= $row["ID"];?>" style="text-decoration:none;"><button type="button" name="button">Read-more</button></a>
                          <a href="hapusberita.php?ID=<?= $row["ID"];?>" style="text-decoration:none;" onclick="return confirm('YAkin untuk menghapus?');"><button type="button" name="button">Hapus</button></a>
                        </div>
                      </article>
                        <?php $i++; else: ?>
                          <section id="boxes" class="col-md-4 thumbnail" >
                              <div class="box">
                                <!-- <img src="" alt=""> -->
                                <h3><?= $row["Judul"]; ?></h3>
                                <p>Di tulis oleh : <?= $row["Penulis"];  ?></p><hr>
                                <p><?= substr($row["Isi"],0, 40);  ?>....</p>
                                <a href="klikberita.php?ID=<?= $row["ID"];?>" style="text-decoration:none;"><button type="button" name="button">Read-more</button></a>
                                <a href="hapusberita.php?ID=<?= $row["ID"];?>" style="text-decoration:none;" onclick="return confirm('sure?');"><button type="button" name="button">Hapus</button></a>
                              </div>
                          </section>
                      <?php endif; ?>
                    <?php endforeach; ?>
   </body>
  </html>

</body>
</html>


<!--
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="author" content="Mahardika Arya Bimantara">
    <title>Gemuruh Web Desa | Konten</title>
    <script type="text/javascript">
    // function openTab(open) {
    //   window.open(open);
    // }
    // </script>
  </head>

  <link rel="stylesheet" href="css/konten.css">

  <body>
    <header>
        <div class="container">
          <div id="Branding">
            <h1><span class="highlight">Gemuruh</span> Web desa</h1>
          </div>
          <nav>
            <ul>
              <li><a href="indexafter.html">Home</a></li>
              <li ><a href="About.html">About</a></li>
              <li class="current"><a href="Konten.php">Konten|Berita</a></li>
            </ul>
          </nav>
        </div>
    </header>

    <section id="newsletter">
      <div class="container">
        <h1>Berita dan Artikel</h1>
          <h3>Temukan hal yang menarik </h3>
          <h3><a href="Tambah_berita.php" style="transform:translate(0, -70px);">Tulis Berita</a></h3>
      </div>
    </section>
          <aside class="sidebar">
            <div class="dark">
            </div>
          </aside>
        </div>
      </div>
    </section>

    <footer>
      <p>Gemuruh Web Desa, Copyright &copy; 2018</p>
    </footer>
  </body>
</html> -->
