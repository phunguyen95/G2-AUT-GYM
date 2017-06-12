<?php
require_once ('conf/setting.php');
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
}
/**        
$myDate = date('m/d/Y');
$myDate=date_format($myDate,"F j, Y");
*/
    $id_blog=$_GET["id_blog"];
    $author=$_GET["author"];
    $comment=$_GET["comment"];
		$sql="INSERT INTO comment(blog_id,comment,username,date) values('$id_blog','$comment','$author',NOW())";

		$sql2="UPDATE blog set cmt_num=cmt_num+1 where blog_id='$id_blog' ";
		$result2=mysqli_query($conn,$sql2);
		
if (mysqli_query($conn, $sql)) {
	echo $sql;
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>