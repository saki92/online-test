<?php
	session_start(); // start the session

	if (isset($_POST['username']))	{	// check is the username and password is correct
		if ($_POST['username']=='foo' and $_POST['pwd']=='bar') {
			$_SESSION['loggedin'] = True;	// set session loggedin as True

		}
	}
	else   	{

		
	}

	// redirect to home if already logged in
	if ($_SESSION['loggedin']==True) {
		//echo "You are logged in";
		header("Location: home.php");
	}
		
	$title = "login";	// to identify the page
?>

<!DOCTYPE html>
<html>
	<head>
		<?php
			echo "<title>" . $title . "</title>";
		?>
		<link rel="stylesheet" type="text/css" href="home.css"/>
	</head>
	<body>
		<div id="container">
			
			<div id="header">
				<h1>COMP233 Assignment-3</h1>
			</div>

						
			<div id="content">
				<h3>Login</h3>
				<hr/>

				<!-- login form -->

				<form action="login.php" method="post">
					Username: <input type="text" name="username"><br/>
					Password: <input type="password" name="pwd"><br/><br/>

					<input type="submit" value="Submit">
				</form>
				<br/>
			</div>
			</div>

		</div>
	</body>

</html>