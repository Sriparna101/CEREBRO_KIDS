
<div id="guts" class="wrapper">
	<section class="profileSection">
		<div>
									<!-- require 'connection.php';
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
									echo "</div>"; -->


								

			<div class='item'>

				<img src="./icon.jpeg" alt="image">

				<div class='item1'>
					<div class="profileUserInfo">
						<p>Email ID : Email</p>
						<button>Change Password</button>
					</div>
					<div class="profileUserInfo">
						<p>Contact Number : Contact Number</p>
						<button>Change Password</button>
					</div>
					<div class="profileUserInfo">
						<p>Alternate Number : Alternate Number</p>
						<button>Change Password</button>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="profileSection">
		<p>Session Progress</p>
		<div class="line"></div>

		<!-- <div id="Progress_Status"> -->
			<table class="progressTable">
				<tr>
					<td>week 1</td>
					<td>week 3</td>
					<td>week 5</td>
					<td>week 7</td>
					<td>week 11</td>
					<td>week 13</td>
					<td>week 15</td>
					<td>week 17</td>
				</tr>
				<tr>
					<td>week 2</td>
					<td>week 4<div class="arrow-up"></div></td>
					<td>week 6</td>
					<td>week 8</td>
					<td>week 10</td>
					<td>week 12</td>
					<td>week 14</td>
					<td>week 16</td>
				</tr>
			</table>
			<!-- <div id="myprogressBar"></div> -->
		<!-- </div> -->
	</section>


	<section class="profileSection">
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

				<button class="certificatebutton">Certificate</button>
			
		</div>

	</section>

</div>