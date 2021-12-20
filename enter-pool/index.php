          <?php 
				 session_start();
 $link= mysqli_connect("localhost","root","","npl");
        
  //failed to connect to database
  if(mysqli_connect_error())
  {
    die ("Database Connection Error");
  }                                

      
        $query = "SELECT * FROM `list`";
        $result = mysqli_query($link, $query);
        if(mysqli_num_rows($result)){
            $i=1;
      
								foreach($result as $row)
								{ 
                                    $id=$row['id'];
                                    $query="UPDATE `list` SET `order_num`=" .$i ;
                                   
                                    if(mysqli_query($link,$query))
                                    {
                                         
                                    }
                                    ++$i;
                }
              }
							
              else echo "Database is empty";


            if(isset($_POST['start-btn']))
						header('location:pool-head.php?order_num=1');
							 ?>
               
               
               <head>
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