<?php
    // Connect to database server
    $hd = mysql_connect("localhost", "root@localhost",
                                     "")
 
          or die ("Unable to connect");
 
    // Select database
    mysql_select_db ("my_database", $hd)
          or die ("Unable to select database");
 
    // Execute sample query (delete all data in customer table)
    $res = mysql_query("SELECT FROM question",$hd)
          or die ("Unable to run query");
 
    // Close connection
    mysql_close($hd);
 
?>