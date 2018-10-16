<link rel="stylesheet" type="text/css" media="all" href="https://d1vhcvzji58n1j.cloudfront.net/assets/app-v2.min-03e6a0769e.css"> 
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!------ Include the above in your HEAD tag ---------->


<?php
//index.php
$connect = mysqli_connect("localhost", "root", "Aranya@1998", "Gamers");
$query = 'SELECT UNIX_TIMESTAMP(time) as datetime,`score` as sensors_temperature_data FROM `scoring` WHERE 1';
$result = mysqli_query($connect, $query);
$rows = array();
$table = array();

$table['cols'] = array(
 array(
  'label' => 'Date Time', 
  'type' => 'datetime'
 ),
 array(
  'label' => 'Time', 
  'type' => 'number'
 )
);

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $datetime = explode(".", $row["datetime"]);
 $sub_array[] =  array(
      "v" => 'Date(' . $datetime[0] . '000)'
     );
 $sub_array[] =  array(
      "v" => $row["sensors_temperature_data"]
     );
 $rows[] =  array(
     "c" => $sub_array
    );
}
$table['rows'] = $rows;
$jsonTable = json_encode($table);

?>


 <head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript">
   google.charts.load('current', {'packages':['corechart']});
   google.charts.setOnLoadCallback(drawChart);
   function drawChart()
   {
    var data = new google.visualization.DataTable(<?php echo $jsonTable; ?>);

    var options = {
     title:'Score',
     legend:{position:'bottom'},
     chartArea:{width:'95%', height:'65%'}
    };

    var chart = new google.visualization.LineChart(document.getElementById('line_chart'));

    chart.draw(data, options);
   }
  </script>
  <style>
  .page-wrapper
  {
   width:1000px;
   margin:0 auto;
  }
  </style>
 </head>  
 <body>
  <div class="page-wrapper">
   <br />
   <h2 align="center">Display Google Line Chart with JSON PHP & Mysql</h2>
  </div>
 </body>



<style>.chooser {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd}

.chooser:hover .dropdown-content {
    display: block;
}

.chooser:hover .dropbtn {
    background-color: #3e8e41;
}</style>
<body style="background-color:#87ceeb">
            <div class="container">    
                  <div class="row">
                      <div class="panel panel-default">
                      <div class="panel-heading">  <h4 >User Profile</h4></div>
                       <div class="panel-body">
                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4"> 
                     <aside class="chooser">
                      <img alt="User Pic" src="/pro/Maxx brown (2).jpg" id="profile-image1" class="img-circle img-responsive">
                       <div class="dropdown-content">
                          <a href="/pro/upload.php">Upload new image</a>
                        </div>
                        </aside>
                 
                      </div>
                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
                          <div class="container" >
                            <h2><?php
            session_start();
            
              echo $_SESSION['username'];
              
            ?></h2>
                          
                           
                          </div>
                           <hr>
                          <ul class="container details" >
                            <li><p><span class="glyphicon glyphicon-user one" style="width:50px;"></span><?php
            session_start();
            
              echo $_SESSION['username'];
              
            ?></p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span><?php
            session_start();
            
              echo $_SESSION['emails'];
              
            ?></p></li>
                          </ul>
                          <hr>
                          <div class="col-sm-5 col-xs-6 tital " ><?php
            session_start();
            
              echo "Date Of Joining: ".$_SESSION['dates'];
              
            ?></div>
                      </div>
                </div>
                 <section class="content">
            <a href="/pro/home.php" alt="Special Offers" class="button ">
              Back
            </a>
        </section>
           <div id="line_chart" style="width: 100%; height: 500px"></div>

            </div>
            </div>
       </body>      