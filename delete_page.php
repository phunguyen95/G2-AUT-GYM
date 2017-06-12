<?php

 require_once ('conf/setting.php');
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }    
$mem_id = $_GET['delete_id'];

$qry = "DELETE FROM membership WHERE mem_id ='$mem_id'";
$result=mysqli_query($conn,$qry);

?>