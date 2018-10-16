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
		<tr>
			<td>1</td>
			<td>
			<?php
            session_start();
            echo $_SESSION['username'];
            ?>
            </td>
			<td>6369</td>
			
		</tr>
		<tr>
			<td>2</td>
			<td><?php
            session_start();
            echo $_SESSION['username'];
            ?></td>
			<td>10437</td>
			
		</tr>
		<tr>
			<td>3</td>
			<td><?php
            session_start();
            echo $_SESSION['username'];
            ?></td>
			<td>5327</td>
			
		</tr>
    <tr>
			<td>4</td>
			<td><?php
            session_start();
            echo $_SESSION['username'];
            ?></td>
			<td>2961</td>
			
		</tr>
    <tr>
			<td>5</td>
			<td><?php
            session_start();
            echo $_SESSION['username'];
            ?></td>
			<td>4135</td>
			
		</tr>
    <tr>
			<td>6</td>
			<td><?php
            session_start();
            echo $_SESSION['username'];
            ?></td>
			<td>3486</td>
			
		</tr>
	</tbody>
</table>
  
  

</body>

</html>
