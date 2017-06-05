<?php
require_once ('conf/setting.php');
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

 echo "";

if(isset($_POST['ratingPoints'])){

    $productID = $_POST['productID'];
    $ratingNum = 1;
    $ratingPoints = $_POST['ratingPoints'];

    //Check the rating row with same post ID
    $prevRatingQuery = "SELECT * FROM product_rating WHERE product_id = '".$productID."'";
    $result = mysqli_query($conn, $prevRatingQuery);
  
    if (mysqli_num_rows($result) > 0) {
        while($prevRatingRow = mysqli_fetch_assoc($result)) {

            $ratingNum = $prevRatingRow['rating_number'] + $ratingNum;
            $ratingPoints = $prevRatingRow['total_points'] + $ratingPoints;
            //Update rating data into the database
            $sql = "UPDATE product_rating SET rating_number = '".$ratingNum."', total_points = '".$ratingPoints."' WHERE product_id = ".$productID."'";
            if (mysqli_query($conn, $sql)) {
                echo "<script>console.log(\"Record updated successfully\")</script>";
            } 
        }
    }else{
        $sql = "INSERT INTO product_rating (product_id,rating_number,total_points) VALUES('".$productID."','".$ratingNum."','".$ratingPoints."')";      
        if (mysqli_query($conn, $sql)) {
                echo "<script>console.log(\"Record inserted successfully\")</script>";
            } 
    }

}

?>