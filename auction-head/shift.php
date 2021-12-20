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
  
  if($_POST['team-select']!=''&& $_POST['point']!='')
  {
  $query="UPDATE `list` SET  `completed`=1, `team_went`=".$_POST['team-select'].", `points`=".$_POST['point']." WHERE `id`=".$id ;
                                   
                              





   if(mysqli_query($link,$query))
                                    {



                                    }

                                    }
                                      
$order_num=(int)$order_num+1;
                                    
header('location:auction.php?order_num='.$order_num.'');
            
?>