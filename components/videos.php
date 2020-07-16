
				<div id=" article" class="wrapper">
					<div id="guts" class="contactus">
						<div class="articlebutttons">
							<a href="#">Money</a>
							<a href="#">Budgeting</a>
							<a href="#">Saving</a>
							<a href="#">Investment</a>
							<a href="#">Taxes</a>
							<a href="#">Banking</a>
						</div>
					
		
										<div>
											<div  class="videoSectionTitle" style="color:white; margin-top: 25px;">Learn-with-Neo</div>
										</div><br>
										<div class="horizontal-scroll ml-1 mt-2">
												<?php
													require 'connection.php';
													$list = "";
													$i="";
													$query = "SELECT * FROM `videos`";
													$data = mysqli_query($conn, $query);
													$row= mysqli_num_rows($data);

														for($i=1 ; $i <= $row ; $i++){
															$query = "SELECT * FROM `videos` WHERE id=$i"; 
															$data = mysqli_query($conn, $query);
															$result = mysqli_fetch_assoc($data);

															
																echo "<video width='320' height='240' controls controlslist='nodownload'>";
																echo "<source src=";
																echo $result['location'];
																echo " type='video/mp4'>";
																echo "Your browser does not support the video tag.";
																echo "</video>";
																
															
														}
												?>
										</div><br>
										<div>
											<div class="col videoSectionTitle" style="color:white;">Learn-with-Experts</div>
										</div><br>
										<div class="horizontal-scroll ml-1 mt-3">
										<?php
											require 'connection.php';
											$list = "";
											$i="";
											$query = "SELECT * FROM `videos`";
											$data = mysqli_query($conn, $query);
											$row= mysqli_num_rows($data);

												for($i=1 ; $i <= 2 ; $i++){
													$query = "SELECT * FROM `videos` WHERE id=$i"; 
													$data = mysqli_query($conn, $query);
													$result = mysqli_fetch_assoc($data);

													
														echo "<video width='320' height='240' controls controlslist='nodownload'>";
														echo "<source src=";
														echo $result['location'];
														echo " type='video/mp4'>";
														echo "Your browser does not support the video tag.";
														echo "</video>";
													
												}
										?>
										</div><br>
										<div>
											<div class="col videoSectionTitle" style="color:white;">Learn-it-Yourself</div>
										</div><br>
										<div class="horizontal-scroll ml-1 mt-3">
										<?php
											require 'connection.php';
											$list = "";
											$i="";
											$query = "SELECT * FROM `videos`";
											$data = mysqli_query($conn, $query);
											$row= mysqli_num_rows($data);

												for($i=1 ; $i <= $row ; $i++){
													$query = "SELECT * FROM `videos` WHERE id=$i"; 
													$data = mysqli_query($conn, $query);
													$result = mysqli_fetch_assoc($data);

													
														echo "<video width='320' height='240' controls controlslist='nodownload'>";
														echo "<source src=";
														echo $result['location'];
														echo " type='video/mp4'>";
														echo "Your browser does not support the video tag.";
														echo "</video>";
													
												}
										?>
										</div>
									</div>
					</div>
				
