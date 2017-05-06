<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>

<body>
      <?php
		              
	 $link=mysqli_connect('localhost','root','','fitness');
		$str="select * from trainner";
 		if($rs=mysqli_query($link,$str));
 		{ 

while ($row = $rs->fetch_assoc()) {

 		 {
	 		 echo "<li><img src='images/".$row['trainner_pic']."'/>";
	 		 echo "<div class= 'desc'>";
	 		 echo "<h3>".$row['trainner_name']."<span class='m_text'>".$row['trainner_class']."</span></h3> ";
            echo "</div>";
            echo "</li>";
		 }
		}
		}	
		?>

</body>
</html>