          <?php 
				 session_start();
 $link= mysqli_connect("localhost","root","","npl");
        
  //failed to connect to database
  if(mysqli_connect_error())
  {
    die ("Database Connection Error");
  }
   $query="UPDATE `list` SET `order_num`=0";
                                    
 if(mysqli_query($link,$query))
 {
        header('location:end_auction.php');
}

							 ?>