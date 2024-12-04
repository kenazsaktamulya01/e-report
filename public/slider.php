
		<div class="top-profiles">
			<div class="pf-hd">
				<h3>Top Profiles</h3>
			</div>
			<div class="profiles-slider">	
			<?php 
				include '../config.php';
				$query = $koneksi->query("SELECT * FROM tb_user");
				while ($user = $query->fetch_array()) {
				
				if ($user['kode' != @$_SESSION['user']['kode']]) { // kode user bukan user yang sedang login
				?>
						<div class="user-profy">
						<?php
						if ($user['foto'] != "") {
						echo "<img src='foto/profil" . $user['foto'] . "' width='57' height='57'/>";
						}else {
						echo "<img src='foto/profil/profilUnknown-5.jpg' width='57' height='57'/>";
					}							
					?>
					<!-- <img src="http://via.placeholder.com/57x57" alt=""> -->
					<h3><?php echo $user['nama_user']; ?></h3>
					<span><?php 
					if ($user['pekerjaan'] != "") {
						echo $user['pekerjaan']; 
					}else {
						echo "-";
					}
					?></span>
					<ul>
					<li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
					<li><a href="#" title="" class="hire">Followers
							<?php 

							$folLower = @$_SESSION['user']['kode'];
							$following = $user['kode'];

							$follow_conect = $koneksi->query("SELECT * FROM tb_user_follow WHERE kode = '$folLower' AND following = '$following'");
							$follow_count = $follow_conect->num_rows;
							?> 

                             </a>
							</li>					
					</ul>
					<a href="" title="">View Profile</a>
				</div><!--user-profy end-->

				<?php
				$tz = "Asia/Jakarta";
				$dt = new DateTime("now",new DateTimeZone($tz));
				$date = $dt->format("Y-m-d G:i:s");

				$id = $_POST['id'] ?? "";
				$sub = $_POST['sub'] ?? "";
				

				if ($sub) {
					$state = $koneksi->prepare("INSERT INTO tb_user_follow(kode, following, subscribed) VALUES (?,?,?)");
					$state->bind_param("sss", $follower, $id, $date);
					if ($state->execute()) {
						echo "<script> location='index.php'</script>";
						exit();
					}
				}
				?>
				<?php 
			} 
			} 
			?>
			</div><!--profiles-slider end-->
		</div><!--top-profiles end-->