<?php 
 session_start();
 $error = "";
 $link= mysqli_connect("localhost","root","","npl");

 if(mysqli_connect_error())
  {
    die ("Database Connection Error");
  } 
  $od=htmlspecialchars($_GET["order_num"]);
$query = "SELECT * FROM `list` WHERE `order_num`=".$od;
  $result1 = mysqli_query($link, $query);
 
   $result = mysqli_fetch_array($result1);
  if(mysqli_num_rows($result1)==0)    header("location:index.php");           
?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>NPL Auction</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
    <link rel="stylesheet" href="vendors/flaticon/flaticon.css">

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <style>
    td{
        text-align:center;
    }
    </style>
</head>

<body>

    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container box_1620">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h">
                        <h2 class="btn btn-success ">POOL &nbsp;&nbsp;&nbsp;
                           <span style="font-size:52px;font-weight:bold"> <?php echo $result['pool'];?><span>
                        </h2></a>
                    <a class="navbar-brand logo_h ">
                        <h2 class=" btn btn-warning " style='font-weight:bold;font-size:36px;'>
                            <?php echo strtoupper($result['name']);?><span>
                        </h2></a>
                    <a class="navbar-brand logo_h ">

                    <form method="POST" action=""  >
                      <?php  if(isset($_POST['end-btn']))
                         
                         
                         header("location:end.php")
                         ?>   
                         
                         
                         
                         <input type="submit" title="Don't Press Until entire auction is completed" style='font-weight:bold;font-size:36px;' name="end-btn" value="END AUCTION" class="btn btn-danger img-ctn-btn">
                                         </form>
                        </a>
                </div>
            </nav>
        </div>
    </header>

    <section class="home_banner_area ">
    <br>
    <br><br>
    <br>


        <div class="container box_1620 ">

            <div class="banner_inner d-flex align-items-center ">
                <div class="banner_content ">
                    <div class="media ">
                        <div class="d-flex ">
                            <img width="100%" height='50%' src="./pic/<?php echo $result['picname'];?>">
                        </div>
                        <div class="media-body">
								<div class="personal_text">
                                
                       
                    
                      
            
            
								        					
                                <table border="1" style=" border-collapse: collapse;" class="alert alert-danger">
                                    <tr>
                                    <td style="padding-top:20px;text-align:center;border:1px solid black;;font-weight:bold;background-color: #dc3545;border-color: #dc3545;" colspan=4 width="100%">POINTS TABLE</td>
                                    <td style="padding-top:20px;text-align:center;border:1px solid black;;font-weight:bold;background-color: #dc3545;border-color: #dc3545;" colspan=3 width="100%">CREDITS LEFT FOR</td>
                                     </tr>

                                    <tr>
                                    <td style="padding:20px;color: #fff;background-color: #dc3545;border-color: #dc3545;">Sl. No.</td>
                                    <td style="padding:20px;color: #fff;background-color: #dc3545;border-color: #dc3545;">TEAM</td>
                                    <td style="padding:20px;color: #fff;background-color: #dc3545;border-color: #dc3545;">POINTS</td>
                                  
  <td style="padding:20px;color: #fff;background-color: #dc3545;border-color: #dc3545;">PLAYERS</td>
                                       <td style="padding:20px;color: #fff;background-color: #dc3545;border-color: #dc3545;">POOL A</td>
                                  <td style="padding:20px;color: #fff;background-color: #dc3545;border-color: #dc3545;">POOL B</td>
                                  <td style="padding:20px;color: #fff;background-color: #dc3545;border-color: #dc3545;">POOL C</td>
                                  
                                    </tr>

                                    <tr>
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
                                          <td>
                                    <?php 
                                       $query=  "SELECT SUM(points) as `sum` from list WHERE `team_went`=0 AND `pool`='A'";
                                     $result1 = mysqli_query($link, $query);
                                    $result2 = mysqli_fetch_array($result1);
                                    $query= "SELECT MAX(pool_max) as `sum` from list WHERE `pool`='A'";
                                     $result1 = mysqli_query($link, $query);
                                    $result3 = mysqli_fetch_array($result1);
                                    echo $result3['sum']-$result2['sum'];
                                    ?>

                                    </td>

      <td>
                                    <?php 
                                       $query= "SELECT SUM(points) as `sum` from list WHERE `team_went`=0 AND `pool`='B'";
                                     $result1 = mysqli_query($link, $query);
                                    $result2 = mysqli_fetch_array($result1);
                                    $query= "SELECT MAX(pool_max) as `sum` from list WHERE `pool`='B'";
                                     $result1 = mysqli_query($link, $query);
                                    $result3 = mysqli_fetch_array($result1);
                                    echo $result3['sum']-$result2['sum'];
                                    ?>

                                    </td>
      <td>
                                    <?php 
                                       $query= "SELECT SUM(points) as `sum` from list WHERE `team_went`=0 AND `pool`='C'";
                                     $result1 = mysqli_query($link, $query);
                                    $result2 = mysqli_fetch_array($result1);
                                    $query= "SELECT MAX(pool_max) as `sum` from list WHERE `pool`='C'";
                                     $result1 = mysqli_query($link, $query);
                                    $result3 = mysqli_fetch_array($result1);
                                    echo $result3['sum']-$result2['sum'];
                                    ?>

                                    </td>

                                    </tr>
                                    <tr>
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

                                    </td>
                                    
                                                      <td>
                                    <?php 
                                       $query=  "SELECT SUM(points) as `sum` from list WHERE `team_went`=1 AND `pool`='A'";
                                     $result1 = mysqli_query($link, $query);
                                    $result2 = mysqli_fetch_array($result1);
                                    $query= "SELECT MAX(pool_max) as `sum` from list WHERE `pool`='A'";
                                     $result1 = mysqli_query($link, $query);
                                    $result3 = mysqli_fetch_array($result1);
                                    echo $result3['sum']-$result2['sum'];
                                    ?>

                                    </td>

      <td>
                                    <?php 
                                       $query= "SELECT SUM(points) as `sum` from list WHERE `team_went`=1 AND `pool`='B'";
                                     $result1 = mysqli_query($link, $query);
                                    $result2 = mysqli_fetch_array($result1);
                                    $query= "SELECT MAX(pool_max) as `sum` from list WHERE `pool`='B'";
                                     $result1 = mysqli_query($link, $query);
                                    $result3 = mysqli_fetch_array($result1);
                                    echo $result3['sum']-$result2['sum'];
                                    ?>

                                    </td>
      <td>
                                    <?php 
                                       $query= "SELECT SUM(points) as `sum` from list WHERE `team_went`=1 AND `pool`='C'";
                                     $result1 = mysqli_query($link, $query);
                                    $result2 = mysqli_fetch_array($result1);
                                    $query= "SELECT MAX(pool_max) as `sum` from list WHERE `pool`='C'";
                                     $result1 = mysqli_query($link, $query);
                                    $result3 = mysqli_fetch_array($result1);
                                    echo $result3['sum']-$result2['sum'];
                                    ?>

                                    </td>

                                    
                                    </tr>
                                    <tr>
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

                                    </td>
                                    
                  <td>
                                    <?php 
                                       $query=  "SELECT SUM(points) as `sum` from list WHERE `team_went`=2 AND `pool`='A'";
                                     $result1 = mysqli_query($link, $query);
                                    $result2 = mysqli_fetch_array($result1);
                                    $query= "SELECT MAX(pool_max) as `sum` from list WHERE `pool`='A'";
                                     $result1 = mysqli_query($link, $query);
                                    $result3 = mysqli_fetch_array($result1);
                                    echo $result3['sum']-$result2['sum'];
                                    ?>

                                    </td>

      <td>
                                    <?php 
                                       $query= "SELECT SUM(points) as `sum` from list WHERE `team_went`=2 AND `pool`='B'";
                                     $result1 = mysqli_query($link, $query);
                                    $result2 = mysqli_fetch_array($result1);
                                    $query= "SELECT MAX(pool_max) as `sum` from list WHERE `pool`='B'";
                                     $result1 = mysqli_query($link, $query);
                                    $result3 = mysqli_fetch_array($result1);
                                    echo $result3['sum']-$result2['sum'];
                                    ?>

                                    </td>
      <td>
                                    <?php 
                                       $query= "SELECT SUM(points) as `sum` from list WHERE `team_went`=2 AND `pool`='C'";
                                     $result1 = mysqli_query($link, $query);
                                    $result2 = mysqli_fetch_array($result1);
                                    $query= "SELECT MAX(pool_max) as `sum` from list WHERE `pool`='C'";
                                     $result1 = mysqli_query($link, $query);
                                    $result3 = mysqli_fetch_array($result1);
                                    echo $result3['sum']-$result2['sum'];
                                    ?>

                                    </td>


                                    </tr>
                                    <tr>
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

                                    </td>
                                                      <td>
                                    <?php 
                                       $query=  "SELECT SUM(points) as `sum` from list WHERE `team_went`=3 AND `pool`='A'";
                                     $result1 = mysqli_query($link, $query);
                                    $result2 = mysqli_fetch_array($result1);
                                    $query= "SELECT MAX(pool_max) as `sum` from list WHERE `pool`='A'";
                                     $result1 = mysqli_query($link, $query);
                                    $result3 = mysqli_fetch_array($result1);
                                    echo $result3['sum']-$result2['sum'];
                                    ?>

                                    </td>

      <td>
                                    <?php 
                                       $query= "SELECT SUM(points) as `sum` from list WHERE `team_went`=3 AND `pool`='B'";
                                     $result1 = mysqli_query($link, $query);
                                    $result2 = mysqli_fetch_array($result1);
                                    $query= "SELECT MAX(pool_max) as `sum` from list WHERE `pool`='B'";
                                     $result1 = mysqli_query($link, $query);
                                    $result3 = mysqli_fetch_array($result1);
                                    echo $result3['sum']-$result2['sum'];
                                    ?>

                                    </td>
      <td>
                                    <?php 
                                       $query= "SELECT SUM(points) as `sum` from list WHERE `team_went`=3 AND `pool`='C'";
                                     $result1 = mysqli_query($link, $query);
                                    $result2 = mysqli_fetch_array($result1);
                                    $query= "SELECT MAX(pool_max) as `sum` from list WHERE `pool`='C'";
                                     $result1 = mysqli_query($link, $query);
                                    $result3 = mysqli_fetch_array($result1);
                                    echo $result3['sum']-$result2['sum'];
                                    ?>

                                    </td>

                                    
                                    </tr>
                                    <tr>
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

                                    </td>
                                                      <td>
                                    <?php 
                                       $query=  "SELECT SUM(points) as `sum` from list WHERE `team_went`=4 AND `pool`='A'";
                                     $result1 = mysqli_query($link, $query);
                                    $result2 = mysqli_fetch_array($result1);
                                    $query= "SELECT MAX(pool_max) as `sum` from list WHERE `pool`='A'";
                                     $result1 = mysqli_query($link, $query);
                                    $result3 = mysqli_fetch_array($result1);
                                    echo $result3['sum']-$result2['sum'];
                                    ?>

                                    </td>

      <td>
                                    <?php 
                                       $query= "SELECT SUM(points) as `sum` from list WHERE `team_went`=4 AND `pool`='B'";
                                     $result1 = mysqli_query($link, $query);
                                    $result2 = mysqli_fetch_array($result1);
                                    $query= "SELECT MAX(pool_max) as `sum` from list WHERE `pool`='B'";
                                     $result1 = mysqli_query($link, $query);
                                    $result3 = mysqli_fetch_array($result1);
                                    echo $result3['sum']-$result2['sum'];
                                    ?>

                                    </td>
      <td>
                                    <?php 
                                       $query= "SELECT SUM(points) as `sum` from list WHERE `team_went`=4 AND `pool`='C'";
                                     $result1 = mysqli_query($link, $query);
                                    $result2 = mysqli_fetch_array($result1);
                                    $query= "SELECT MAX(pool_max) as `sum` from list WHERE `pool`='C'";
                                     $result1 = mysqli_query($link, $query);
                                    $result3 = mysqli_fetch_array($result1);
                                    echo $result3['sum']-$result2['sum'];
                                    ?>

                                    </td>

                                    </tr>
                                    <tr>
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

                                    </td>
                                                      <td>
                                    <?php 
                                       $query=  "SELECT SUM(points) as `sum` from list WHERE `team_went`=5 AND `pool`='A'";
                                     $result1 = mysqli_query($link, $query);
                                    $result2 = mysqli_fetch_array($result1);
                                    $query= "SELECT MAX(pool_max) as `sum` from list WHERE `pool`='A'";
                                     $result1 = mysqli_query($link, $query);
                                    $result3 = mysqli_fetch_array($result1);
                                    echo $result3['sum']-$result2['sum'];
                                    ?>

                                    </td>

      <td>
                                    <?php 
                                       $query= "SELECT SUM(points) as `sum` from list WHERE `team_went`=5 AND `pool`='B'";
                                     $result1 = mysqli_query($link, $query);
                                    $result2 = mysqli_fetch_array($result1);
                                    $query= "SELECT MAX(pool_max) as `sum` from list WHERE `pool`='B'";
                                     $result1 = mysqli_query($link, $query);
                                    $result3 = mysqli_fetch_array($result1);
                                    echo $result3['sum']-$result2['sum'];
                                    ?>

                                    </td>
      <td>
                                    <?php 
                                       $query= "SELECT SUM(points) as `sum` from list WHERE `team_went`=5 AND `pool`='C'";
                                     $result1 = mysqli_query($link, $query);
                                    $result2 = mysqli_fetch_array($result1);
                                    $query= "SELECT MAX(pool_max) as `sum` from list WHERE `pool`='C'";
                                     $result1 = mysqli_query($link, $query);
                                    $result3 = mysqli_fetch_array($result1);
                                    echo $result3['sum']-$result2['sum'];
                                    ?>

                                    </td>

                                    
                                    </tr>

                                </table>
                                    

								</div>
							</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->
    <?php 
if($result['year']=='0')
	$year="1st";
else if($result['year']=='1')
	$year="2nd";
else if($result['year']=='2')
	$year="3rd";
else if($result['year']=='3')
	$year="M.Tech";
	if($result['style']=='0')
	$spec="Batting";
else if($result['style']=='1')
	$spec="Balling";
else if($result['style']=='2')
	$spec="Wicket Keeping";
else if($result['style']=='3')
	$spec="All Rounder";

if($result['branch']=='0')
	$branch="CSE";
else if($result['branch']=='1')
	$branch="ECE";
else if($result['branch']=='2')
	$branch="EEE";
else if($result['branch']=='3')
	$branch="MECH";
else if($result['branch']=='4')
	$branch="CIVIL";

if($result['capped']=='0')
{	$team="Playing NPL for fist time";
}

else if($result['capped']=='1')
{
	
	if($result['team']=='0')
	$team="Previously Played for Mighty Wizard";
elseif($result['team']=='1')
	$team="Previously Played for Invincible Warriors";
elseif($result['team']=='2')
	$team="Previously Played for Fiery Falcons";
elseif($result['team']=='3')
	$team="Previously Played for Super Spartans";
elseif($result['team']=='4')
    $team="Previously Played for Deadly Dragons";
elseif($result['team']=='5')
    $team="Previously Played for Storm Riders";



}
?>
    <!--================Welcome Area =================-->
    <section class="welcome_area p_120 ">
        <div class="container ">
            <div class="row welcome_inner ">
                <div class="col-lg-6 ">
                    <div class="welcome_text ">
                        <h4>
                            <?php echo '';?></h4>

                        <div class='alert alert-warning'>
                            <h1 class="btn btn-warning">Personal Info</h1>
                            <div class="row margin">
                                <div class="input-field col s12">

                                    <b>Name:</b> <?php echo strtoupper($result['name']);?><hr>

                                </div>
                            </div>
                            <div class="row margin">
                                <div class="input-field col s12">

                                    <b>Email:</b> <?php echo $result['email'];?><hr>
                                </div>
                            </div>
                            <div class="row margin">
                                <div class="input-field col s12">

                                    <b>Age :</b><?php echo $result['age'];?>
                                    <hr>

                                </div>
                            </div> 

                            <div class="row margin">
                                <div class="input-field col s12">

                                    <b>Phone no.:</b> <?php echo $result['phone'];?> <hr>

                                </div>
                            </div>

                            <div class="row margin">
                                <div class="input-field col s12">

                                    <b>Branch:</b><?php echo $branch;?><hr>
                                </div>
                            </div>


                            <div class="row margin">
                                <div class="input-field col s12">


                                    <b>Year:</b><?php echo $result['year'];?><hr>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="tools_expert ">
                        <div class="skill_main ">
                            <div class='alert alert-success'>
                            <form action="shift.php?id=<?php echo $result['id'];?>&order_num=<?php echo $result['order_num']; ?>"  method="POST">
                                <div class="row margin">
                                    <div class="input-field col s12">
                                        <h1 class='btn btn-success'>Cricketing- Career Info</h1>
                                        <br> <b style="color:green">Specification:</b>
                                        <?php echo $spec;?><hr>
                                    </div>
                                </div>
                                <div class="row margin">
                                    <div class="input-field col s12">


                                       <b style="color:green"> NPL HISTORY:</b>
                                     <?php echo $team;?><hr>
                                </div>

                                            </div>

                         
                              
                                <div class="row margin">
                                    <div class="input-field col s12">

                                        <b style="color:green">Best Record: </b><?php echo $result['record'];?>
                                        <hr>
                                        
                                    </div>
                                </div>    
                                <form action="shift.php?id=<?php echo $result['id']?>&order_num=<?php echo $result['order_num']?>" method="POST">
                             

                                 <div class="row margin">
                                    <div class="input-field col s12" style="display:inline;">

                                        <b style="color:green">Points: </b> <input type="text" class="form-control" name="point" placeholder="Input point">
                                        <hr>
                                        
                                    </div>
                                </div> 



                                 <div class="row margin">
                                    <div class="input-field col s12">

                                        <b style="color:green">Assign to: </b><br>
                                         <select name="team-select" style=" border-radius:4px;" class="floor-select-st shift-up">
                    <option value="" hidden selected></option>
                
 
                                <option value='0'>Mighty Wizard</option>
                                <option value='1'>Invincible Warriors</option>
                                    <option value='2'>Fiery Falcons</option>
                                    <option value='3'>Super Spartans</option>
                                        <option value='4'>Deadly Dragons</option>
                                        <option value='5'>Storm Riders</option>                            
                    
                            
                </select>
                                      <br>  <hr>
                                        
                                    </div>
                                </div> 

                                   <div class="row margin">
                                    <div class="input-field col s12">

                                           <input type="submit" name="start-btn" value="Next>>" class="btn btn-primary img-ctn-btn">
                                      
                                        
                                    </div>
                                </div> 
                             


                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <footer class="footer_area p_120 ">
        <div class="container ">
            <div class="row ">

                <p class="alert" style="text-align:center">
                    <b>made with <span style="color:red"}>&#x2764;</span> by <span style="color:white"> Shivam Kumar Giri </span><span>|<b> National Institute of Technology,Puducherry </b></span>

                </p>

            </div>
        </div>
    </footer>
    <!--================End Footer Area =================-->






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js "></script>
    <script src="js/popper.js "></script>
    <script src="js/bootstrap.min.js "></script>
    <script src="js/stellar.js "></script>
    <script src="vendors/lightbox/simpleLightbox.min.js "></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js "></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js "></script>
    <script src="vendors/isotope/isotope.pkgd.min.js "></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js "></script>
    <script src="vendors/popup/jquery.magnific-popup.min.js "></script>
    <script src="js/jquery.ajaxchimp.min.js "></script>
    <script src="vendors/counter-up/jquery.waypoints.min.js "></script>
    <script src="vendors/counter-up/jquery.counterup.min.js "></script>
    <script src="js/mail-script.js "></script>
    <script src="js/theme.js "></script>
</body>

</html>