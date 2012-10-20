<?php
	session_start();	// start the session

	

	$title = "home";	// to identify the page

?>

<!DOCTYPE html>
<html>
	<head>
		<?php
			echo "<title>" . $title . "</title>"
		?>
		<link rel="stylesheet" type="text/css" href="home.css"/>
	</head>
	<body id="theme">
		<div id="container">
			<div id="header">
				<h1>COMP233 Assignment-3</h1>
			</div>

			<?php
				// set navigation bar using cookies
					include "vert-nav.php";				
			?>
			<div id="content">
				<h3>Home</h3>
				<hr/>
				<p>
Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
 laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation 
 ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor
  in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis 
  at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis 
  dolore te feugait nulla facilisi.
</p>
<p>
Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie 
consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim
 qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor
  sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
</p>
				<br/>
				<br/>
		
			</div>
			</div>

		</div>
	</body>

</html>