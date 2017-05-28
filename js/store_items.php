<?php
	if(isset($_POST['total_cart_items'])){
        if(isset($_SESSION['cart_item'])){
          echo count($_SESSION['cart_item']);
        }else{
           echo "0";
        }   
        exit();
    } 
?>