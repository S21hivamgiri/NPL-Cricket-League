          <?php 
				 session_start();
 $link= mysqli_connect("localhost","root","","npl");
        
  //failed to connect to database
  if(mysqli_connect_error())
  {
    die ("Database Connection Error");
  }                                

      
        $query = "SELECT * FROM `list` WHERE completed=0 ORDER BY `pool`";
        $result = mysqli_query($link, $query);
        if(mysqli_num_rows($result)){
							
              }else header('location:end_auction.php');


            if(isset($_POST['start-btn']))
						header('location:auction-head.php?order_num=1');
							 ?><head>
               <link rel="stylesheet" href="./css/bootstrap.min.css">
               <style>
body, html {
  height: 100%;
  margin: 0;
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

  margin-top:37%;
}
</style>
 </head>
 
 <body class="bg">
 <form action="" method="POST">
 <div class="form-group center-align">    
                   <center> <input type="submit" name="start-btn" value="Start The Auction Now" class="id btn btn-warning img-ctn-btn"></center>
                    </div>
</form>
<body>