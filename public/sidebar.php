                            <div class="main-left-sidebar no-margin">
									<div class="user-data full-width">
										<div class="user-profile">
											<div class="username-dt">
												<div class="usr-pic">
                                                    <?php
                                                    if(@$_SESSION["user"]) {
                                                        if($tampil["foto"] != "") {
                                                        echo "<img src='foto/profil/". $tampil["foto"]."' width'100' height='100'/>";
                                                        }
                                                    }
                                                     ?>
													
												</div>
											</div><!--username-dt end-->
											<div class="user-specs">
													
												<h3>
													<?php if (@$_SESSION["user"]){
														echo $tampil["nama_user"]; 
														
													} else if (@$_SESSION["admin"]){
														echo $tampil["nama_admin"]; 
													}
													?>
													</h3>
												<span>
													<?php
														if (@$_SESSION["user"]) {
															echo $tampil["pekerjaan"];
														} else if(@$_SESSION["admin"]) {
														}
													 ?>
													</span>
											</div>
										</div><!--user-profile end-->
										<ul class="user-fw-status">
										<?php
                                            $akun = @$_SESSION['user']['kode'];
                                            $variable = $koneksi->query("SELECT * FROM tb_user_follow WHERE kode = '$akun' ");
                                            $jumlah = $variable->num_rows;                                            ?>
                                            <li>
                                                <h4>Following</h4>
                                                <span><?php echo $jumlah; ?></span>
                                            </li>
                                            <?php
                                            $akun2 = @$_SESSION['user']['kode'];
                                            $variable2 = $koneksi->query("SELECT * FROM tb_user_follow WHERE following = '$akun2' ");
                                            $jumlah2 = $variable2->num_rows;                                            ?>
                                            <li>
                                                <h4>Followers</h4>
                                                <span><?php echo $jumlah2; ?></span>
                                            </li>
                                            <li>
                                                <a href="#" title="">View Profile</a>
                                            </li>
                                        </ul>
									</div><!--user-data end-->
								</div><!--main-left-sidebar end-->