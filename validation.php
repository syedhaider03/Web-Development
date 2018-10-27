<?php
session_start();

$username=$_POST['Username'];
$password=$_POST['Password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'EUser');
$q="Select * from user_info where username='$username' && password='$password';";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
if($num==1){
	$_SESSION['Username']=$username;
	if (isset($_GET['page'])) {
		// if ($_GET['page']=="checkout.php") {
		header('location:http://localhost/shopper/checkout.php');

		}
	
	else
header('location:http://localhost/shopper/index.php');
}
else
{
header('location:http://localhost/shopper/register.php?login=failed');

}

 ?>
