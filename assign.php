<?php

      require_once ('conf/setting.php');
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }    
$orderid = $_GET['order_id'];

$qry = "UPDATE orders set status='Confirmed' where id= '$orderid'";
$result=mysqli_query($conn,$qry);

?>