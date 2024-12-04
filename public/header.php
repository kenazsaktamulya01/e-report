
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>WorkWise Html Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/line-awesome.css">
<link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">
<link rel="stylesheet" type="text/css" href="lib/slick/slick.css">
<link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>


<body>
	

	<div class="wrapper">
		
		<header>
			<div class="container">
				<div class="header-data">
					<div class="logo">
						<a href="index.html" title=""><img src="images/logo.png" alt=""></a>
					</div><!--logo end-->
					<div class="search-bar">
						<form><h1 style="margin-top:10px; color:white; fw-bold">Aplikasi Pengaduan Masyarakat </h1></form>
					</div><!--search-bar end-->
					<nav>
						<ul>
							<li>
								<a href="index.php" title="">
									<span><img src="images/icon1.png" alt=""></span>
									Beranda
								</a>
							</li>
							<li>
								<a href="profile.php" title="">
									<span><img src="images/icon4.png" alt=""></span>
									Profil
								</a>
							</li>
								<ul>
									<li><a href="user-profile.html" title="">User Profile</a></li>
									<li><a href="my-profile-feed.html" title="">my-profile-feed</a></li>
								</ul>
							</li>
							<li>
								<div class="notification-box">
									<div class="nt-title">
										<h4>Setting</h4>
										<a href="#" title="">Clear all</a>
									</div>
									<div class="nott-list">
										<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="images/resources/ny-img1.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="images/resources/ny-img2.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="images/resources/ny-img3.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="images/resources/ny-img2.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
									</div><!--nott-list end-->
								</div><!--notification-box end-->
							</li>
						</ul>
					</nav><!--nav end-->
					<div class="menu-btn">
						<a href="#" title=""><i class="fa fa-bars"></i></a>
					</div><!--menu-btn end-->
					<div class="user-account">
						<?php 
						include "../config.php";
						if(@$_SESSION["user"]) {
						$aktif = @$_SESSION["user"]["kode"];
						$data = $koneksi->query("SELECT * FROM tb_user
						WHERE kode ='$aktif' ");
						$tampil = $data->fetch_array();

						} else if(@$_SESSION["admin"]) {
						$aktif= @$_SESSION["admin"]["kode"];
					$data = $koneksi->query("SELECT * FROM tb_admin
					WHERE kode ='$aktif' ");
					$tampil = $data->fetch_array();
					}													
					?>
						
						<div class="user-info">
						<?php 
							if (@$_SESSION["user"]) {
								if ($tampil["foto"] != "") {
									echo "<img src='foto/profil/". $tampil["foto"]."' width'30' height='30'/>";
								}
								} else {
									echo "<img src='../img/avatar.png' width='30' height='30'/>";
								}
								
								?>
							<!-- <img src="http://via.placeholder.com/30x30" alt=""> -->
							<a href="#" title="">
								<?php 
								if (@$_SESSION["user"]) {
									echo $tampil["nama_user"];
									} else if (@$_SESSION["admin"]) {
									echo $tampil["nama_admin"];
									}?>
									</a>
							<i class="la la-sort-down"></i>
						</div>
						<div class="user-account-settingss">
							
							<h3 class="tc"><a href="/pengaduan/login.php" title="">Logout</a></h3>
						</div><!--user-account-settingss end-->
					</div>
				</div><!--header-data end-->
			</div>
		</header><!--header end-->
