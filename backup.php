

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title><Table> Responsive</title>
  
  
  
      <link rel="stylesheet" href="/pro/ld.css" media="all" type="text/css"/>

  
</head>

<body>

  
  <h1 style="text-align: center;">LEADERBOARDS</h1>

<table class="container">
	<thead>
		<tr>
			<th><h1>Rank</h1></th>
			<th><h1>Username</h1></th>
			<th><h1>League Score</h1></th>
			<th><h1>Virtul BAJA</h1></th>
			<th><h1>Archery</h1></th>
			<th><h1>Cosmic Warfare</h1></th>
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

$sql = "SELECT * FROM indi_score order by overall desc;";
$result = $conn->query($sql);
$x=0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$x=$x+1;
        echo "<tr><td>".$x.".</td><td>". $row["name"]."</td><td>". $row["overall"]."</td><td>".$row["score_car"]."</td><td>".$row["score_archery"]."</td><td>".$row["score_space"]."</td></tr>";

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
