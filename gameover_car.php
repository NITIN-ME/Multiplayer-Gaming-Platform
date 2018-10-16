<head><link rel="stylesheet" type="text/css" media="all" href="https://d1vhcvzji58n1j.cloudfront.net/assets/app-v2.min-03e6a0769e.css"> </head>

<?php
$servername = "localhost";
$username = "root";
$password = "Aranya@1998";
$database="Gamers";

$conn = new mysqli($servername, $username, $password,$database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$my_file = 'Online-Gaming-Portal-master/vehicle-terrain-master/test.txt';
$myfile=fopen($my_file,'r');
$string=fgets($myfile);
$stt=explode(" ", $string);
$now = mktime();
$x=date('Y-m-d h:i:s',$now);
	$sql1 = "INSERT INTO `scoring`(`name`, `game`, `score`, `time`) VALUES ('".$stt[0]."','car','".$stt[1]."','$x');";
	if ($conn->query($sql1) === TRUE) {
   echo '<h2 style="text-align: center;">'.$stt[0].' won</h2>';
    echo '<h1 style="text-align: center;">Congratulations</h1>';
    echo '<form action="/pro/home.php">';
    echo '<input type="submit" name="back" value="back to home">';
   	echo '</form>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>