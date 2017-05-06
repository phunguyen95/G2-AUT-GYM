<?php  session_start();  // session starts with the help of this function 




if(isset($_POST["username"]))
 {
	 $username=$_POST["username"];
	 $password=$_POST["password"];

	$link=mysqli_connect('localhost','root','','fitness');
if($link->connect_error)
	 {
	 	die('Error:('.$link->connect_error.')'.$link->connect_error);

	 }
	  else
	  {
	$sql="select * from membership where username='$username' and password='$password'";
			$result=mysqli_query($link,$sql);

	if(mysqli_num_rows($result)>0)
 {
	 $kh=mysqli_fetch_row($result);
	 $_SESSION["mem_id"]=$kh[0];
	 $_SESSION["lname"]=$kh[4];
	 $_SESSION["contact"]=$kh[6];
	 $_SESSION["role"]=$kh[7];
	 $role = $_SESSION["role"];
	 if($role == 1)
	 {
		echo "<script>alert('Hello Admin') </script>"; 
	 }
	 //refetch trang 1
	 else{
	   echo"<script>alert('Hi $kh[4]');</script>";
	 }
	   echo"<script>window.location='index.php';</script>";
	
	 }
else{

 echo"<script>alert('Wrong password');</script>";
 	   echo"<script>window.location='signin.html';</script>";

 }
}
}
?>