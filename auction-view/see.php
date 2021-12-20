<?php

    session_start();

    header('location:auction-head.php?order_num='.$_SESSION['od'].'');



?>                             