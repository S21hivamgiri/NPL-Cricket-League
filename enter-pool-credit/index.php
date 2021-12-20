

<?php 
 session_start();
 $error = "";
 $link= mysqli_connect("localhost","root","","npl");

 if(mysqli_connect_error())
  {
    die ("Database Connection Error");
  } 
$host= gethostname();


  
  if (isset($_POST ["signUp"]))
 {


   $_POST['pool-A'];
      $_POST['pool-B'];
        $_POST['pool-C'];


         $query = "SELECT * FROM `list` ORDER BY `pool`";
        $result = mysqli_query($link, $query);
        if(mysqli_num_rows($result)){
								foreach($result as $row)
								{ 
                                    $id=$row['id'];    $pool=$row['pool'];
                                    if($pool=='A')
                                    $query="UPDATE `list` SET `pool_max`=" . $_POST['pool-A']. " WHERE `id`=".$id ;
                                     if($pool=='B')
                                    $query="UPDATE `list` SET `pool_max`=" . $_POST['pool-B']. " WHERE `id`=".$id ;
                                     if($pool=='C')
                                    $query="UPDATE `list` SET `pool_max`=" . $_POST['pool-C']. " WHERE `id`=".$id ;
                                    
                                    if(mysqli_query($link,$query))
                                    {
                                        header("location:end-pool.php");
                                         
                                    }
                              
                }
 }
}
 ?>









<link rel="stylesheet" href="./css/bootstrap.min.css">


  <div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
      <form class="login-form" method="post">

        
        <center>
       <div class='alert alert-warning'> 
         <h1 class="btn btn-warning">Enter MAx Credits</h1>
         <br>
         <br>
       
            Pool A:<input id="pool-A" name="pool-A" placeholder="Enter Max-credits" required> 
            <br><br>
             Pool B:<input id="pool-A" name="pool-B" placeholder="Enter Max-credits" required> 
             <br><br>
              Pool C:<input id="pool-A" name="pool-C" placeholder="Enter Max-credits" required> 
 
    <br><br>
         
      
	  <div class="row">
         
          <div class="input-field col s12">
            <input type="submit" class="button btn btn-primary" name="signUp">
          </div>
        
        </div>
</div>
</center>
       </form>
    </div>
  </div>