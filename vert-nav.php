<?php
	// vertical navigation bar

	echo "<div id='vert-nav'>";

	if ($title != "home")	{
		
			echo "<a href='home.php' style='color:black;'>Home</a><br/><br/>";
	}
		
/*	if ($title != "Home")	{
		
			echo "<a href='home.php' style='color:black;'>Home</a><br/><br/>";
	}
*/		
	if (($title != "Test1") and ($title != "login"))/* and $_SESSION['loggedin'])*/ 	{
		
			echo "<a href='Test1.php' style='color:black;'>Test #1</a><br/><br/>";
	}
		
	if (($title != "Test2") and ($title != "login"))/* and $_SESSION['loggedin'])*/ 	{
		
			echo "<a href='Test2.php' style='color:black;'>Test #2</a><br/><br/>";
	}
	
	if (($title != "Test3") and ($title != "login"))/* and $_SESSION['loggedin'])*/ 	{
		
			echo "<a href='Test3.php' style='color:black;'>Test #3</a><br/><br/>";
	}
	
	if ($_SESSION['loggedin'])	{
		
			echo "<a href='logout.php' style='color:black;'>Logout</a><br/><br/>";
	}
		
	elseif ($title != "login")	{
		
			echo "<a href='login.php' style='color:black;'>Login</a><br/><br/>";
	}
		
	echo "<br/><br/>";

	echo "</div>";
?>
