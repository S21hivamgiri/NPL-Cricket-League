
<head>

    <link rel="stylesheet" href="./register/css/bootstrap.min.css">
    <style>

.ander{

    padding-left:65px;
}

</style>
</head>

<body>

<div class='ander alert alert-success'>
                            <form action=""  method="POST">
                            <center><h1 class="btn btn-danger">Control Board-Order of Execution</h1></center>
                                <div class="row margin">
                                    <div class="input-field col s12">
                                     <p class="alert alert-danger">It is preferable to connect viewer systems to server system using college Wifi(BOH) for auction to avoid restiction in user entry</p>
                                   <p class="alert alert-danger">Connect all the system to Wifi where the server system is connected. Server system has database. Do not disconnect till the registration ends</p>
                                   
                                        <h1 class='btn btn-success'>To be Shared Info</h1>
                                        <br> <b style="color:green">Registration Link:</b>
                                        <span class="alert alert-secondary"><?php $host= gethostname();$ip = gethostbyname($host); echo "http://".$ip."/npl/register"?>
                                    
                                    </span><hr></div>
                                </div>
                               <div class="row margin">
                                    <div class="input-field col s12">
                                        <h1 class='btn btn-success'>Database Info</h1>
                                        <br> <b style="color:green">Database Link:</b>
                                       
                                   <a href="http://localhost/phpmyadmin/sql.php?db=npl&table=list">  <input type="button" name="db-btn" value="Visit" class="btn btn-primary img-ctn-btn">
                                     </a>
                                    </span><hr></div>
                                </div>
                             <div class="row margin">
                                    <div class="input-field col s12">
<b style="color:green">Download data of registered student for Pool division:</b>
                                
 <a href="./export-registered"><input type="button" name="reg-btn" value="Download Data" class="btn btn-primary img-ctn-btn">
</a><hr>
                                        
                                    </div>
                                </div> 
                               <div class="row margin">
                                    <div class="input-field col s12">
                                        <h1 class='btn btn-success'>Pool Info</h1>
                                        <br> <b style="color:green">Enter Student pool:</b>
                                 <span class="alert alert-secondary">
                                        <?php echo "http://localhost/npl/enter-pool"?>&nbsp; &nbsp; 
                                    
                                   <a href="./enter-pool/">   <input type="button" name="pool-btn" value="Visit" class="btn btn-primary img-ctn-btn">
                                  </a>    
                                    </span><hr></div>
                                </div>
                                    <div class="row margin">
                                    <div class="input-field col s12">

                                        <b style="color:green">Download data after Pool Division in sequence of Auction:</b>
                                   <a href="./export-ordered/"> <input type="button" name="ord-btn" value="Download Info" class="btn btn-primary img-ctn-btn">
                                      </a><hr>
                                        
                                    </div>
                                </div> 
                                    <div class="row margin">
                                    <div class="input-field col s12">
                                        <br> <b style="color:green">Enter Max Pool Credit:</b>
                                 <span class="alert alert-secondary">
                                        <?php echo "http://localhost/npl/enter-pool-credit"?>&nbsp; &nbsp; 
                                    
                                    <a href="./enter-pool-credit">  <input type="button" name="cred-btn" value="Visit" class="btn btn-primary img-ctn-btn">
                                      </a>
                                    </span><hr></div>
                                </div>

     <div class="row margin">
                                    <div class="input-field col s12">
                                    <p class="alert alert-danger">It is preferable to connect viewer systems to server system using mobile hot-spot for auction for faster  service</p>
                                        <h1 class='btn btn-success'>Auction Info- To be shared to PC</h1>
                                        <br> <b style="color:green">Address for viewer/PC's:</b>
                                 <span class="alert alert-secondary">
                                        <?php $host= gethostname();$ip = gethostbyname($host); echo "http://".$ip."/npl/auction-view"?>
                                    
                                       
                                    </span><hr></div>
                                </div>
                                 <div class="row margin">
                                    <div class="input-field col s12">
                                        <h1 class='btn btn-success'>Auction Info</h1>
                                        <br> <b style="color:green">For Admin</b>
                                 <span class="alert alert-secondary">
                                        <?php echo "http://localhost/npl/auction-head"?>&nbsp; &nbsp; 
                                   <a href="./auction-head/">    <input type="button" name="auction-btn" value="Visit" class="btn btn-primary img-ctn-btn">
                                    </a>
                                       
                                    </span><hr></div>
                                </div>

  <div class="row margin">
  
                                    <div class="input-field col s12">
                                        <h1 class='btn btn-success'>View Results of Team</h1>
                                        <br> <b style="color:green">For Admin</b>
                                 <span class="alert alert-secondary">
                                        <?php echo "http://localhost/npl/auction-head/end_auction.php"?>&nbsp; &nbsp; 
                                   <a href="./auction-head/end_auction.php">  <input type="button" name="end-btn" value="Visit" class="btn btn-primary img-ctn-btn">
                                    </a>
                                       
                                    </span><hr></div>
                                </div>


                  
                  
                  

                               
                             


                            </div>
                            </form>
                              <p class="alert" style="text-align:center">
                    <b>made with <span style="color:red"}>&#x2764;</span> by <span style="color:blue"> Shivam Kumar Giri </span><span style="color:red" >|<b> National Institute of Technology,Puducherry </b></span>

                </p>
                </body>