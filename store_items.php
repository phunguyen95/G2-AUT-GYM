<?php
  session_start();

  if(isset($_POST['total_cart_items'])){
    if(isset($_SESSION['all'])){
      echo $_SESSION['all'];
    }else{
       echo "0";
    }	
  	exit();
  } 

?>