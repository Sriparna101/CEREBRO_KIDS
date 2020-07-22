<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script data-require="jquery" data-semver="2.1.1" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="./js/scroll.js"></script>

</head>
<body>
	<div id=" article" class="wrapper">
					<div id="guts" class="contactus">
						<div class="articlebutttons">

							<a href="#" class="active">Money</a>
							<a href="#">Budgeting</a>
							<a href="#">Saving</a>
							<a href="#">Investment</a>
							<a href="#">Taxes</a>
							<a href="#">Banking</a>
							<a href="#">Digital Finance</a>
							<a href="#">Money Frauds</a>
						</div>
					
		
										<div>
											<div  class="videoSectionTitle" style="color:white; margin-top: 25px;"><p style="font-size: 30px;">Learn-with-Neo</p></div>
										</div><br>
										<div >										
											
										    <div class="center" >
											    <div class="leftscroll">
											      	<button id="left-button" style="cursor: pointer;">
											       		 &lt
											      	</button>
											    </div>
											  <div class="center" id="content">
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
																
																echo "<video width='320' height='240' style='margin:5px;' controls controlslist='nodownload'>";
																echo "<source src=";
																echo $result['location'];
																echo " type='video/mp4'>";
																echo "Your browser does not support the video tag.";
																echo "</video>";
																												
															
														}
												?>
											</div>
												<div class="rightscroll" style="cursor: pointer;">
											    	<button id="right-button">
											        	&gt
											     	</button>
											    </div>
											 </div>
										</div><br>



										<div>
											<div class="col videoSectionTitle" style="color:white;"><p style="font-size: 30px;">Learn-with-Experts</p></div>
										</div><br>
										<div >										
											
										    <div class="center" >
											    <div class="leftscroll">
											      	<button id="left-button1" style="cursor: pointer;">
											       		 &lt
											      	</button>
											    </div>
											  <div class="center" id="content1">
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

													
														echo "<video width='320' height='240' controls style='margin:5px;' controlslist='nodownload'>";
														echo "<source src=";
														echo $result['location'];
														echo " type='video/mp4'>";
														echo "Your browser does not support the video tag.";
														echo "</video>";
													
												}
										?>
											</div>
												<div class="rightscroll" style="cursor: pointer;">
											    	<button id="right-button1">
											        	&gt
											     	</button>
											    </div>
											 </div>
										</div><br>




										<div>
											<div class="col videoSectionTitle" style="color:white;"><p style="font-size: 30px;">Learn-it-Yourself</p></div>
										</div><br>
										<div >										
											
										    <div class="center" >
											    <div class="leftscroll">
											      	<button id="left-button2" style="cursor: pointer;">
											       		 &lt
											      	</button>
											    </div>
											  <div class="center" id="content2">
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

															
																echo "<video width='320' height='240' controls style='margin:5px;' controlslist='nodownload'>";
																echo "<source src=";
																echo $result['location'];
																echo " type='video/mp4'>";
																echo "Your browser does not support the video tag.";
																echo "</video>";
															
														}
												?>
											</div>
												<div class="rightscroll" style="cursor: pointer;">
											    	<button id="right-button2">
											        	&gt
											     	</button>
											    </div>
											 </div>
										</div><br>

</body>
</html>
				
				


