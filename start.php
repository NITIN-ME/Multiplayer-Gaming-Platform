<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8″>
  <link rel="stylesheet" type="text/css" media="all" href="https://d1vhcvzji58n1j.cloudfront.net/assets/app-v2.min-03e6a0769e.css">
  <title>Yuudh-2D</title>
      <link rel = "shortcut icon" sizes = "256x256" href = "icon.jpg" />
        <style type = "text/css">
            * {
                padding: 0;
                margin: 0;
            }
            body{
                background-image: url('arrowparas-master/assets/bowMan.gif');
                background-position: top;
                background-repeat: no-repeat;
                background-size: cover;
            }
            canvas {
                touch-action-delay: none;
                touch-action: none;
                -ms-touch-action: none;
            }
            .wrapper {
                text-align: center;
            }
            #main h1 {
              color: white;
              text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
            }
                    
           .button {
              display: block;
              width: 20%;
              margin-left: 40%;
              margin-top: 10%;
              line-height: 30px;
              border: 1px solid #AA2666;
              color: white;
              font-weight: bold;
              text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
              background-color: #FB1886;
              background-image: -webkit-linear-gradient(bottom, #FB1886 0%, #B30D5D 100%);
              background-image:         linear-gradient(to bottom, #FB1886 0%, #B30D5D 100%);
              border-radius: 5px;
              text-align: center;
          }
          .button:hover {
              background-color: #B30D5D;
              background-image: -webkit-linear-gradient(bottom, #B30D5D 0%, #FB1886 100%);
              background-image:         linear-gradient(to bottom, #B30D5D 0%, #FB1886 100%);
          }
          a{
              text-decoration: none;
          }

</style>
  
</head>
<body>
  <div class="wrapper">
    <div id="menu" class="main">
      <div id="main">

        <br><br>
        <h1>Yuudh-2D</h1>
        <ul>
          <li><?php
            session_start();
              $myfile = fopen("arrowparas-master/assets/getsssion.php", "r") or die("Unable to open file!");
              $myfile2 = fopen("arrowparas-master/assets/getsssion2.php", "r") or die("Unable to open file!");
              if($_SESSION['username']==fgets($myfile)){
              echo '<a href="http://192.168.10.103:8081/" alt="Special Offers" class="button ">
              PLAY
            </a>';
              }
              else if($_SESSION['username']==fgets($myfile2)){
                echo '<a href="http://192.168.10.103:8081/part1" alt="Special Offers" class="button ">
              PLAY
            </a>';
               
              }
              fclose($myfile);
              fclose($myfile2);
            ?></li>
        </ul>
      </div>
    </div>
  </div>
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
 <audio autoplay loop>
      <source src="arrowparas-master/assets/music.mp3">
  </audio> 
</body>
</html>