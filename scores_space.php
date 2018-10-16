<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title><Table> Responsive</title>
  
  
  
      <link rel="stylesheet" href="ld.css">

  
</head>

<body>

  <h1><?php
            session_start();
            echo "Welcome ".$_SESSION['username'];
            $sss=$_SESSION['username'];
            ?></h1>
  <h1 style="text-align: center;">Your HIGH SCORES</h1>

<table class="container">
	<thead>
		<tr>
			<th><h1>#</h1></th>
			<th><h1>Username</h1></th>
			<th><h1>Scores</h1></th>
		</tr>
	</thead>
	<tbody>
		<?php
$servername = "localhost";
$username = "root";
$password = "Aranya@1998";
$dbname = "Gamers";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM scoring where game='space' and name='".$sss."';";
$result = $conn->query($sql);
$x=0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$x=$x+1;
        echo "<tr><td>".$x.".</td><td>". $row["name"]."</td><td>". $row["score"]."</td></tr>";

    }
} else {
    echo "0 results";
}
$conn->close();
?>
	</tbody>
</table>
  
  

</body>

</html>
