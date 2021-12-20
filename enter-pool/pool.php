<?php 

 session_start();
 $link= mysqli_connect("localhost","root","","npl");
        
  //failed to connect to database
  if(mysqli_connect_error())
  {
    die ("Database Connection Error");
  }
    $id=htmlspecialchars($_GET["id"]);
  $order_num=htmlspecialchars($_GET["order_num"]);
  

  $query="UPDATE `list` SET  `pool`='".$_POST['pool-select']."' WHERE `id`=".$id ;
                                   
 


   if(mysqli_query($link,$query))
                                    {

echo "Successfully Added";

                                    }

                                    
                                      
$order_num=(int)$order_num+1;
                                    
 header('location:pool-head.php?order_num='.$order_num.'');
            
?>