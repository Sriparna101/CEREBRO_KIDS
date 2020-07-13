
<div id="guts" class="profilesection">
	<section id="Profilesection">
		<div>
			<?php
									/*require 'connection.php';
									$query = SELECT * FROM `user` WHERE email= $_SESSION['email'];
									$data = mysqli_query($conn, $query);
									$result = mysqli_fetch_assoc($data);

									echo "<div class='item'>";
									echo $result['Image'];
									echo "</div>";

									echo "<div class='item'>";
									echo "Email ID";
									echo $result['Email'];
									echo "Contact Number";
									echo $result['Contact'];
									echo "Alternate Number";
									echo $result['Alternate'];
									echo "</div>";*/


								?>

			<div class='item'>

				<img src="./icon.jpeg" alt="image">

				<div class='item1'>
					Email ID : Email <br>
					Contact Number : Contact Number<br>
					Alternate Number : Alternate Number<br>
				</div>
			</div>
		</div>
	</section>


	<section id="Profilesection2">
		<p>Session Progress</p>
		<div class="line"></div>

		<div id="Progress_Status">
			<div id="myprogressBar"></div>
		</div>
	</section>


	<section id="Profilesection3">
		<p>Performances</p>
		<div class="line"></div>

		<div class="performances">
			<div class="performancesscore">
				Test 1:<br>
				<p>7/10</p>
			</div>
			<div class="performancesscore">
				Test 1:<br>
				<p>7/10</p>
			</div>
			<div class="performancesscore">
				Test 1:<br>
				<p>7/10</p>
			</div>

			<div class="certificatebutton">
				<button>Certificate</button>
			</div>
		</div>

	</section>

</div>