<?php
// session_start();
$email=$_POST['Email'];
// $ln=$_POST['ln'];
$username=$_POST['Username'];
$password=$_POST['Password'];
// $gender=$_POST['gender'];
$con=mysqli_connect('localhost','haider','mycomputer');
mysqli_select_db($con,'EUser');
$q="INSERT INTO user_info(Username,Email,Password)
VALUES('$username','$email','$password');";
$result=mysqli_query($con,$q) ;
// echo "$result";
echo "$result";
// $num=mysqli_num_rows($result);
if($result)
	{ 
		if (isset($_GET['page'])) {
		header('location:http://localhost/shopper/checkout.php');

		}
	
	else
header('location:http://localhost/shopper/register.php?signin=false');
}

else{
header('location:http://localhost/shopper/register.php?signup=failed');

}
 ?>

