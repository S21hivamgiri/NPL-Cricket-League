
          <?php 
				 session_start();
 $link= mysqli_connect("localhost","root","","npl");
        
  //failed to connect to database
  if(mysqli_connect_error())
  {
    die ("Database Connection Error");
  }
  ?>

<head>
                           <link rel="stylesheet" href="./css/bootstrap.min.css">
               <style>
body, html {
  height: 100%;
  margin: 0;
}
.tdimen {

    padding-top:7px;
     padding-bottom:7px;
      padding-right:7px;
       padding-left:7px;
}
td {

    padding-top:10px;
     padding-bottom:10px;
      padding-right:50px;
       padding-left:50px;
}
.bg {
  /* The image used */
  background-image: url("./pic/back.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.id{

  margin-top:1%;
}
</style>
 </head>
 
 <body class="bg">
 <center>
<table border="1" style=" text-align:center;border-collapse: collapse;" class=" id alert alert-light">
                                    <tr>
                                    <td style="padding-top:15px;color:black;text-align:center;border:1px solid black;;font-weight:bold;background-color: #dc3545;border-color: #dc3545;" colspan=5 width="100%">POINTS TABLE</td>
                                    </tr>

                                    <tr >
                                    <td style="padding:15px;color: #fff;background-color: #dc3545;border-color: #dc3545;">
                                    </td>
                                    <td style="padding:15px;color: #fff;background-color: #dc3545;border-color: #dc3545;">Sl. No.</td>
                                    <td style="padding:15px;color: #fff;background-color: #dc3545;border-color: #dc3545;">TEAM</td>
                                    <td style="padding:15px;color: #fff;background-color: #dc3545;border-color: #dc3545;">POINTS</td>
                                    <td style="padding:15px;color: #fff;background-color: #dc3545;border-color: #dc3545;">PLAYERS</td>
                                    </tr>

                                    <tr>
                                    <td class="tdimen">
                                    <img src="./pic/wizard.jpg" width=50px height=50px>
                                    </td>
                                    <td>1</td>
                                    <td>Mighty Wizards</td>
                                    <td><?php 
                                    $query= 'SELECT SUM(points) as `sum` from list WHERE `team_went`=0';
                                     $result1 = mysqli_query($link, $query);
                                    $result2 = mysqli_fetch_array($result1);
                                    echo $result2['sum'];
                                    ?></td>
                                    <td>
                                                          <?php 
                                    $query= 'SELECT COUNT(*) as `sum` from list WHERE `team_went`=0';
                                     $result1 = mysqli_query($link, $query);
                                    $result2 = mysqli_fetch_array($result1);
                                    echo $result2['sum'];
                                    ?>

                                    </td>
                                    </tr>
                                    <tr>
                                    <td class="tdimen">
                                    <img src="./pic/warriors.jpg"width=50px height=50px>
                                    </td>

                                    <td>2</td>
                                    <td>Invincible Warriors</td>
                                    <td><?php 
                                    $query= 'SELECT SUM(points) as `sum` from list WHERE `team_went`=1';
                                     $result1 = mysqli_query($link, $query);
                                    $result2 = mysqli_fetch_array($result1);
                                    echo $result2['sum'];
                                    ?></td>
                                    <td>
                                    <?php 
                                    $query= 'SELECT COUNT(*) as `sum` from list WHERE `team_went`=1';
                                     $result1 = mysqli_query($link, $query);
                                    $result2 = mysqli_fetch_array($result1);
                                    echo $result2['sum'];
                                    ?>

                                    </td></tr>
                                   
                                    <tr>
                                     <td class="tdimen">
                                    <img src="./pic/falcon.jpg" width=50px height=50px>
                                    </td>
                                    <td>3</td>
                                    <td>  Fiery Falcons</td>
                                    <td><?php 
                                    $query= 'SELECT SUM(points) as `sum` from list WHERE `team_went`=2';
                                     $result1 = mysqli_query($link, $query);
                                    $result2 = mysqli_fetch_array($result1);
                                    echo $result2['sum'];
                                    ?></td>
                                    <td>
                                    <?php 
                                    $query= 'SELECT COUNT(*) as `sum` from list WHERE `team_went`=2';
                                     $result1 = mysqli_query($link, $query);
                                    $result2 = mysqli_fetch_array($result1);
                                    echo $result2['sum'];
                                    ?>

                                    </td></tr>
                                    <tr>
                                    <td class="tdimen">
                                    <img src="./pic/super.jpg" width=50px height=50px>
                                    </td>

                                    <td>4</td>
                                    <td>Super Spartans</td>
                                    <td><?php 
                                    $query= 'SELECT SUM(points) as `sum` from list WHERE `team_went`=3';
                                     $result1 = mysqli_query($link, $query);
                                    $result2 = mysqli_fetch_array($result1);
                                    echo $result2['sum'];
                                    ?></td>
                                    <td>
                                    <?php 
                                    $query= 'SELECT COUNT(*) as `sum` from list WHERE `team_went`=3';
                                     $result1 = mysqli_query($link, $query);
                                    $result2 = mysqli_fetch_array($result1);
                                    echo $result2['sum'];
                                    ?>

                                    </td></tr>
                                    <tr>
                                    <td class="tdimen">
                                    <img src="./pic/dragon.jpg" width=50px height=50px>
                                    </td>

                                    <td>5</td>
                                    <td>Deadly Dragons</td>
                                    <td><?php 
                                    $query= 'SELECT SUM(points) as `sum` from list WHERE `team_went`=4';
                                     $result1 = mysqli_query($link, $query);
                                    $result2 = mysqli_fetch_array($result1);
                                    echo $result2['sum'];
                                    ?></td>
                                    <td>
                                    <?php 
                                    $query= 'SELECT COUNT(*) as `sum` from list WHERE `team_went`=4';
                                     $result1 = mysqli_query($link, $query);
                                    $result2 = mysqli_fetch_array($result1);
                                    echo $result2['sum'];
                                    ?>

                                    </td></tr>
                                    <tr>
                                    
                                    <td class="tdimen">
                                    <img src="./pic/riders.jpg" width=50px height=50px>
                                    </td>
<td>6</td>
                                    <td>Storm Rider</td>
                                    <td><?php 
                                    $query= 'SELECT SUM(points) as `sum` from list WHERE `team_went`=5';
                                     $result1 = mysqli_query($link, $query);
                                    $result2 = mysqli_fetch_array($result1);
                                    echo $result2['sum'];
                                    ?></td>
                                    <td>
                                    <?php 
                                    $query= 'SELECT COUNT(*) as `sum` from list WHERE `team_went`=5';
                                     $result1 = mysqli_query($link, $query);
                                    $result2 = mysqli_fetch_array($result1);
                                    echo $result2['sum'];
                                    ?>

                                    </td></tr>

                                </table>

<form action="export-data.php" method="POST">
                   <center> <input type="submit" name="start-btn" value="Print Final Excel sheet" class=" btn btn-light img-ctn-btn"></center>
                    </center>  </div>
</form>


<div class="form-group center-align" style=" float: left;
  width: 50%;">    
<form action="export1-data.php?id=0" method="POST">
 
                   <center> <input type="submit" name="start-btn" value="Print for Mighty Wizard" class=" btn btn-warning img-ctn-btn"></center>
                    </center>  
</form>
   <form action="export1-data.php?id=1" method="POST">
    
                   <center> <input type="submit" name="start-btn" value="Print for Invincible Warriors" class=" btn btn-warning img-ctn-btn"></center>
                    </center>
</form>
   <form action="export1-data.php?id=2" method="POST">
    
                   <center> <input type="submit" name="start-btn" value="Print for Fiery Falcons" class=" btn btn-warning img-ctn-btn"></center>
                    </center>
</form>
</div>
   <form action="export1-data.php?id=3" method="POST">
 <div class="form-group center-align">    
                   <center> <input type="submit" name="start-btn" value="Print for Super Spartans" class=" btn btn-warning img-ctn-btn"></center>
                    </center>  </div>
</form>
   <form action="export1-data.php?id=4" method="POST">
 <div class="form-group center-align">    
                   <center> <input type="submit" name="start-btn" value="Print for Deadly Dragons" class=" btn btn-warning img-ctn-btn"></center>
                    </center>  </div>
</form>
   <form action="export1-data.php?id=5" method="POST">
 <div class="form-group center-align">    
                   <center> <input type="submit" name="start-btn" value="Print for Storm Riders" class=" btn btn-warning img-ctn-btn"></center>
                    </center>  </div>
</form>
   
<body>