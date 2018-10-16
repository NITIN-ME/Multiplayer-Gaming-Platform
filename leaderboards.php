

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title><Table> Responsive</title>
  
  
  
      <link rel="stylesheet" href="/pro/ld.css" media="all" type="text/css"/>

  
</head>

<body>

  
  <h1 style="text-align: center;">LEADERBOARDS</h1>
<form class="form-signin" method="post"><input type="submit" name="refresh" value="REFRESH LEADERBOARDS"></form>
<table class="container">
	<thead>
		<tr>
			<th><h1>Rank</h1></th>
			<th><h1>Username</h1></th>
			<th><h1>League Score</h1></th>
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
if (isset($_POST['refresh']))
{
$sql1 = "INSERT INTO `indi_score`(`name`,`overall`) select name,sum(score) from scoring group by name;";
  if ($conn->query($sql1) === TRUE) {
    echo "";

} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}
}
$sql = "SELECT * FROM indi_score order by overall desc;";
$result = $conn->query($sql);
$x=0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$x=$x+1;
        echo "<tr><td>".$x.".</td><td>". $row["name"]."</td><td>". $row["overall"]."</td></tr>";

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
