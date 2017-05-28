<?php
$id=$_POST['id'];
$username=$_POST['username'];
$password=$_POST['password'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$contact=$_POST['contact'];

$message=''; // 
$status='success';              // Set the flag  
//sleep(2); // if you want any time delay to be added

//// Data validation starts ///
if (!filter_var($contact, FILTER_VALIDATE_EMAIL)) {
    $message = "Invalid email format";
    $status='Failed';
}

if(!is_numeric($id)){  // checking data
	$message= "Data Error";
	$status='Failed';
}

//// Data Validation ends /////
if($status<>'Failed'){  // Update the table now

	//$message="update student set mark=$mark, name
	require "config.php"; // MySQL connection string
	$count=$dbo->prepare("update membership set username=:username,password=:password,fname=:fname,lname=:lname,address=:address,contact=:contact WHERE mem_id=:id");
	$count->bindParam(":username",$username,PDO::PARAM_STR,55);
	$count->bindParam(":password",$password,PDO::PARAM_STR,55);
	$count->bindParam(":fname",$fname,PDO::PARAM_STR,55);
	$count->bindParam(":lname",$lname,PDO::PARAM_STR,55);
	$count->bindParam(":address",$address,PDO::PARAM_STR,255);
	$count->bindParam(":contact",$contact,PDO::PARAM_STR,1000);

	$count->bindParam(":id",$id,PDO::PARAM_INT,11);

	if($count->execute()){
	$no=$count->rowCount();
	$message= " $no  Record updated<br>";
	}else{
	$message = print_r($dbo->errorInfo());
	$message .= ' database error...';
	$status='Failed';
}


}else{

}// end of if else if status is success 
$a = array('id'=>$id,'username'=>$username,'password'=>$password,'fname'=>$fname,'lname'=>$lname,'address'=>$address,'contact'=>$contact);
$a = array('data'=>$a,'value'=>array("status"=>"$status","message"=>"$message"));
echo json_encode($a); 
?>