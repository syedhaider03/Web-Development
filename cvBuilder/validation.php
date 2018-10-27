<?php
session_start();

$username=$_POST['Username'];
$password=$_POST['Password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'User');
$q="Select * from user_info where username='$username' && password='$password';";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
if($num==1){
	$_SESSION['Username']=$username;
	header('location:http://localhost/cvbuilder/index.php');
}
else
{
header('location:http://localhost/cvbuilder/login_invalid.html');

}

 ?>
