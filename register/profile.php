<?php session_start();
  echo ' <link rel="stylesheet" href="./css/bootstrap.min.css">';
   echo $_SESSION['proof'];
echo "<center><h1><div class='alert alert-success'>You are added successfully</div></h1><br>ALL the BEST :-)<br><br><br>----STAY TUNED FOR AUCTION--</center>"; 
echo "<center><img style='width:90%'src= ./pic/".$_SESSION['picname']."></center>";  
echo"<div class='alert alert-warning'><br><br><hr><center>Name:&nbsp;&nbsp;<b>".strtoupper($_SESSION['id0'])."</b></center>";
echo"<br><center>Age:&nbsp;&nbsp;<b>".$_SESSION['id4']."</b></center>";
echo"<br><br><hr><center>Email id::&nbsp;&nbsp;<b>".$_SESSION['id1']."</b></center>";
echo"<br><center>Mobile:&nbsp;&nbsp;<b>".$_SESSION['id3']."</b></center><br>";




echo'</div><br><div class="alert alert-success">';
echo"<hr><center>Best Record:&nbsp;&nbsp;<b>".$_SESSION['id2']."</b></center>";

if($_SESSION['id5']=='0')
	$spec="Batting";
else if($_SESSION['id5']=='1')
	$spec="Balling";
else if($_SESSION['id5']=='2')
	$spec="Wicket Keeping";
else if($_SESSION['id5']=='3')
	$spec="All Rounder";
echo"<br><center>Specialization:&nbsp;&nbsp;<b>".$spec."</b></center>";
if($_SESSION['id6']=='0')
	$branch="CSE";
elseif($_SESSION['id6']=='1')
	$branch="ECE";
elseif($_SESSION['id6']=='2')
	$branch="EEE";
elseif($_SESSION['id6']=='3')
	$branch="MECH";
elseif($_SESSION['id6']=='4')
	$branch="CIVIL";
echo"<br><center>Branch:&nbsp;&nbsp;<b>".$branch."</b></center>";
if($_SESSION['id8']=='0')
{	$cap="Welcome to NPL for fist time";echo"<br><br><hr><center><b>".$cap."</b></center>";}

elseif($_SESSION['id8']=='1')
{
	
	if($_SESSION['id9']=='0')
	$team="Mighty Wizard";
else if($_SESSION['id9']=='1')
	$team="Invincible Warriors";
else if($_SESSION['id9']=='2')
	$team="Fiery Falcons";
else if($_SESSION['id9']=='3')
	$team="Super Spartans";
else if($_SESSION['id9']=='4')
	$team="Deadly Dragons";
	else if($_SESSION['id9']=='5')
	$team="Strom Rider";
echo"<br><center>Welcome back! Previously Played for <b>".$team."</b></center>";	
	
}
	
	
if($_SESSION['id7']=='0')
	$year="1st";
else if($_SESSION['id7']=='1')
	$year="2nd";
else if($_SESSION['id7']=='2')
	$year="3rd";
else if($_SESSION['id7']=='3')
	$year="4th";
	echo"<br><center>Year:&nbsp;&nbsp;<b>".$year."&nbsp;Year</b></center><br><br></div>";

?>