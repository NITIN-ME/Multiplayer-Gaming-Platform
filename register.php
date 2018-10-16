<?php
$servername = "localhost";
$username = "root";
$password = "Aranya@1998";
$database="Gamers";

$conn = new mysqli($servername, $username, $password,$database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$nameid=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['password'];
$pass2=$_POST['password2'];
if($pass!=$pass2)
{
	echo "password doesn't match. Registration Failed........";
}
else{
	$sql1 = "select Name from user_data;";
	$result = $conn->query($sql1);

if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc()) 
    {
        if($row["Name"]==$nameid)
        {
        	echo "Name already exists. Please choose a different name........";
        }
        else
        {
            $dates=date("Y-m-d");
        	$sql = "insert into user_data (Name,Email_address,Password,Date) values ('$nameid','$email','$pass','$dates');";
			if ($conn->query($sql) === TRUE)
			{
				header('Location:/pro/home.php');
				exit();
			}
        }
    }
}
}
?>