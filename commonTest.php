<html>
<head><link rel="stylesheet" type="text/css" href="home.css"/>

<title>Test</title>
</head>
<body id="theme">
<div id="container">
	<div id="header">
		<h1>COMP233 Assignment-3</h1>
	</div>
	<?php
		include "vert-nav.php";
	?>
	<div id="content">
		<h3>Test</h3>
		<hr/>
<form action="<?php echo $PHP_SELF;?>" method="get">

<?php
// Function used by the Test pages.
function Tests($test_id) {
    // Connect to database server
    $hd = mysql_connect("localhost", "root","sakthi") 
          or die ("Unable to connect");
 
    // Select database
     mysql_select_db ("questionary")
          or die ("Unable to select database");
 
    // Execute sample query (delete all data in customer table)
    $res = mysql_query("SELECT * FROM questions WHERE test_id=$test_id")
          or die ("Unable to run query");

// Evaluation of the answers
if (count($_GET)!=0) {
$incre=0;
	foreach($_GET as $key=>$value) {
		$ques=mysql_query("SELECT * FROM questions WHERE question_id=$key");
		$row_ques=mysql_fetch_row($ques);
		if ($_GET[$key]==$row_ques[5]) {
			echo $row_ques[0] . '<br />' . "The answer is correct" . '<br /><br />';
			$incre+=1;}
		else {
			echo $row_ques[0] . '<br />' . "The answer is wrong" . '<br /><br />';}
	}
	echo "<br />you got ".$incre." answers correct<br />";
	echo "<br /><form action='$PHP_SELF'><input type='submit' value='Take the test again'></form>";
} 


//displaying the questions
else {

 
	$radio_button="<input type='radio' name='";
	$rows=mysql_num_rows($res);
for ($j=0; $j<$rows; ++$j)
	// Fetching the rows from db
	{ $row=mysql_fetch_row($res);
	echo $row[0].'<br />'.$radio_button.strval($row[6])."' value='a'>".$row[1]
		.'<br />'.$radio_button.strval($row[6])."' value='b'>".$row[2]
		.'<br />'.$radio_button.strval($row[6])."' value='c'>".$row[3]
		.'<br />'.$radio_button.strval($row[6])."' value='d'>".$row[4].'<br />'.'<br />';
}
 
echo "
<input type='submit' value='Submit'>
</form>
</div></div></div>
</body></html>";

}
}
?>
