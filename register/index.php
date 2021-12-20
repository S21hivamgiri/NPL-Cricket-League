<?php 
 session_start();
 $error = "";
 $link= mysqli_connect("localhost","root","","npl");

 if(mysqli_connect_error())
  {
    die ("Database Connection Error");
  } 
  
  if (isset($_POST ["signUp"]))
 {



   $name = mysqli_real_escape_string($link, $_POST['name']);
            $email = mysqli_real_escape_string($link, $_POST['email']);
            $mobile = mysqli_real_escape_string($link, $_POST['phone']);
			$record = mysqli_real_escape_string($link, $_POST['record']); 
			$age = mysqli_real_escape_string($link, $_POST['age']);
            $branch = mysqli_real_escape_string($link, $_POST['Branch']);
            $spec = mysqli_real_escape_string($link, $_POST['Specification']);	
			$year = mysqli_real_escape_string($link, $_POST['year']);
$cap = mysqli_real_escape_string($link, $_POST['capped']);				
			$team = mysqli_real_escape_string($link, $_POST['Team']);	
					$_SESSION['id6'] = $branch;
                    $_SESSION['id1']= $email;
					$_SESSION['id3']= $mobile;
                    $_SESSION['id2']= $record;
					$_SESSION['id0'] = $name ;
                    $_SESSION['id4'] = $age;
                    $_SESSION['id5']=$spec;
					$_SESSION['id7']=$year;
					$_SESSION['id8']=$cap;
					$_SESSION['id9']=$team;
	
			// execute query
      $target_dir = "./pic/";
                $file_name=$_FILES["fileToUpload"]["name"];
                $tmp = explode('.', $_FILES["fileToUpload"]["name"]);
                
                $file_extension = end($tmp);
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
 $_FILES["fileToUpload"]["name"]=$mobile."pic.".$file_extension;
                   $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                  $_SESSION['picname'] = basename( $_FILES["fileToUpload"]["name"]);


 $query = "INSERT INTO `list` (`name`,`style`,`record`,`age`,`branch`,`phone`,`email`,`year`,`capped`,`team`,`picname`) VALUES 
 ('".$name."','".$spec."','".$record."','".$age."','".$branch."','".$mobile."','".$email."','".$year."','".$cap."','".$team."','".$_SESSION['picname']."')";
echo $query;
            if(mysqli_query($link,$query))
                    { 
                        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                        $_SESSION['proof']= "  <div class='alert alert-success index-alert-upd' role='alert'>
                            The file ". $file_name. " has been uploaded.
                        </div>";
                    
                      header("Location: profile.php");
                        }
                    }
                    else 
                    {
                        echo "somthing went wrong server side error probably an attempt for multiple entry";
                    }
    } 
    
      echo ' <link rel="stylesheet" href="./css/bootstrap.min.css">';
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>NPL</title>
  <!-- CORE CSS-->
  
<style type="text/css">
html,
body {
    height: 100%;
	color:navy;background:lightyellow;
}
.login-form{
	
	padding-left:20px;
}
html {
    display: table;
    margin: auto;
}
body {
    display: table-cell;
    vertical-align: middle;
	background:lightblue;align:center;
}
.margin {
  margin: 0 !important;
}
.label{
background:white;
color:gray;}
h1.jj{

	animation-duration: 0.5s;
	animation-iteration-count: infinite;
	animation-name: example;
}
@keyframes example
{
	0%{
	color: red;
	text-shadow: 1px 1px 2px purple , 0 0 25px black ;
	}
	25%{
	color: white;	text-shadow: black;
	}
	50%{
	color: red;
	text-shadow: 1px 1px 2px purple , 0 0 25px black ;
	}
	75%{
	color: white;
	text-shadow: black;	
	}
	100%{
	color: gray;
	text-shadow: 1px 1px 2px purple , 0 0 25px black ;
	}
	
}
</style>
  <script>function showDiv() {
   document.getElementById('welcomeDiv').style.display = "block";
}</script>
</head>

<body>


  <div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
      <form class="login-form" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="input-field col s12 center">
        <br>    
            <b><h1 class="jj">NITPY Premier league <br></h1></b>
              <center><b><h2>Registration Form</h2></b></center>
          </div>
        </div>
       <br>     <br>
       <div class="alert alert-danger">
         <h1 class="btn btn-danger">Instruction</h1><br>
          <label style="color:red">* All the fields are required</label><br>
		 
		 <label style="color:red">* Big size Images Take Longer Time</label><br>
     <label style="color:red">* Wait to load the profile page for successful registration</label><br> 
</div>
       <div class='alert alert-warning'> 
         <h1 class="btn btn-warning">Personal Info</h1>
        <div class="row margin">
          <div class="input-field col s12">

            Name:<input id="name" type="text" class="validate" placeholder="Name" name="name" required> <hr>
     
          </div>
        </div>   <br>  
        <div class="row margin">
          <div class="input-field col s12">

            Email: <input id="email" type="email" class="validate" placeholder="Email" name="email" required > <hr>
          </div>
        </div>   <br>  
        <div class="row margin">
          <div class="input-field col s12">
        
            Age:<input id="age" name="age" placeholder="Age" required> <hr>
 
          </div>
        </div>   <br>  
      
		<div class="row margin">
          <div class="input-field col s12">
         
           Phone no.: <input id="phone" type="phone" name="phone" placeholder="Phone no." required> <hr>
           
          </div>
        </div>  
		 
		<div class="row margin" >
          <div class="input-field col s12">
          
         Branch:<br>
         <div style='text-align:center;'>
                        <input type="radio" name="Branch" value="0" > CSE
                        <input type="radio" name="Branch" value="1" > ECE<br>
                        <input type="radio" name="Branch" value="2" > EEE
                        <input type="radio" name="Branch" value="3" > MECH<br>
            <input type="radio" name="Branch" value="4" > CIVIL<br>
            <hr>
</div>
          </div>
        </div>    
		
     
		<div class="row margin">
          <div class="input-field col s12">
          
                      
         Year:<br>    <div style='text-align:center;'>
                        <input type="radio" name="year" value="0" > 1st
                        <input type="radio" name="year" value="1" > 2nd<br>
                        <input type="radio" name="year" value="2" > 3rd
                        <input type="radio" name="year" value="3" > 4th<br><hr>
          </div></div>
</div>
</div>
<div class='alert alert-success'>
        <div class="row margin">
          <div class="input-field col s12">
 <h1 class='btn btn-success'>Cricketing- Career Info</h1>
            <br>
         Specification:<br>
          <div style='text-align:center;'>
                      
                        <input type="radio" name="Specification" value="0" > Batsman
                        <input type="radio" name="Specification" value="1" > Bowler<br>
                        <input type="radio" name="Specification" value="2" > Wicket Keeper
                        <input type="radio" name="Specification" value="3" > All Rounder<br><hr>
				
           </div>
          </div>
        </div> 
			<div class="row margin">
          <div class="input-field col s12">
          
                      
         Capped(Do previously played for NPL): <br><br>        <div style='text-align:center;'> 
                        <input type="radio" name="capped" value="1" onclick="showDiv()" > Yes
                       <input type="radio" name="capped" value="0"> No</div>
        <hr>
          </div>
        </div>
		
		
		
		<br> 
<div class="row margin" style="display:none;"id="welcomeDiv">
          <div class="input-field col s12">
          
        Team:<br>
 <div style='text-align:center;'>
                        <input type="radio" name="Team" value="0" > Mighty Wizards<br>
                        <input type="radio" name="Team" value="1" > Invincible Warriors<br>
                        <input type="radio" name="Team" value="2" > Fiery Falcons<br>
                        <input type="radio" name="Team" value="3" > Super Spartans<br>
            <input type="radio" name="Team" value="4" > Deadly Dragons<br>
            	<input type="radio" name="Team" value="5" > Storm Rider<br>
        <hr>
</div>
          </div>
        </div> 	
  <div class="row margin">
          <div class="input-field col s12">
       
            Best Record: <input id="record" name="record"type="text" placeholder="Best Record"> <hr>
          <br>
          </div>
        </div>   <br>  	
	<div class="row margin">
          <div class="input-field col s12">
		   Profile pic:<br>
		 <br>
           <input type="file" name="fileToUpload" class='btn btn-success' id='fileToUpload' accept="image/*"/ required> <hr>
           </div>
        </div> <br>  
          <br>
</div>

   <center>
        <div class="row">
         
          <div class="input-field col s12">
            <input type="submit" class="button btn btn-primary" name="signUp">
          </div>
        
        </div>

</center>
      </form>
    </div>
  </div>
  <center>
</center>
</body>

</html>