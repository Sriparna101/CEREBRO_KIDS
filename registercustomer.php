
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="stylesheets/style.css">
</head>
<body >

	<div class="outer">
		<fieldset>	
			<h2 class="headingregister">Register</h2>
			<div class="inner">
				<form class="formregister" action="index.php" method="post" >
					First name:<br> <input type="text" name="firstname" required=""><br><br>
					Last name: <br><input type="text" name="lastname" required=""><br><br>
					Email: <br><input type="email" name="email" required=""><br><br>

					Password: <br><input type="Password" name="Password" min="8" required=""><br>
					Re-Type Password: <br><input type="Password" name="RePassword" required=""><br><br>
					<button type="submit" value="Register" >Register</button>
					<button type="reset" >Reset</button>
				</form>
			</div>
		</fieldset>	
	</div>

</body>
</html>
