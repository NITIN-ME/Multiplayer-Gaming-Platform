<?php

// Initialize variable for database credentials
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Aranya@1998';
$dbname = 'Gamers';

//Create database connection
  $dblink = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

//Check connection was successful
  if ($dblink->connect_errno) {
     printf("Failed to connect to database");
     exit();
  }

//Fetch 3 rows from actor table
  $result = $dblink->query("SELECT overall FROM indi_score;");

//Initialize array variable
  $dbdata = array();

//Fetch into associative array
  while ( $row = $result->fetch_assoc())  {
	$dbdata[]=$row;
  }

//Print array in JSON format
 $x=json_encode($dbdata);
 $myfile=fopen("sampleData.json",'w');
 fwrite($myfile,$x);
 //echo $x;
 $string = file_get_contents("sampleData.json");
 echo $string;
?>