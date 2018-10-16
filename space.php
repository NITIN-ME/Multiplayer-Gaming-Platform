<!DOCTYPE html>
<html>
<head>

      <link rel="stylesheet" type="text/css" media="all" href="https://d1vhcvzji58n1j.cloudfront.net/assets/app-v2.min-03e6a0769e.css">
	<title>Game</title>
</head>
<body background="/pro/space2.jpg" style="background-size: cover;background-repeat: no-repeat;">
  <center>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div>
  <section class="content">
            <?php
            session_start();
              $myfile = fopen("nitinfinal/assets/getsssion.php", "r") or die("Unable to open file!");
              $myfile2 = fopen("nitinfinal/assets/getsssion2.php", "r") or die("Unable to open file!");
              if($_SESSION['username']==fgets($myfile)){
                echo '<a href="http://192.168.10.103:8082/" alt="Special Offers" class="button ">
              PLAY
            </a>';
                
              }
              else if($_SESSION['username']==fgets($myfile2)){
echo '<a href="http://192.168.10.103:8082/part1" alt="Special Offers" class="button ">
              PLAY
            </a>';               
              }
              fclose($myfile);
              fclose($myfile2);
            ?>
        </section>
        <section class="content">
            <a href="/pro/scores_space.php" alt="Special Offers" class="button ">
              SCORES
            </a>
        </section>
         <section class="content">
            <a href="/pro/home.php" alt="Special Offers" class="button ">
              EXIT
            </a>
        </section>
      </div>
       </center>  

</body>
</html>