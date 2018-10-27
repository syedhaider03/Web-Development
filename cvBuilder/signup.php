<?php
// session_start();
$fn=$_POST['fn'];
$ln=$_POST['ln'];
$username=$_POST['username'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$con=mysqli_connect('localhost','haider','mycomputer');
mysqli_select_db($con,'User');
$q="INSERT INTO user_info(Username,Password,First_Name,Last_Name,Gender)
VALUES('$username','$password','$fn','$ln','$gender');";
$result=mysqli_query($con,$q) ;
// echo "$result";
echo "$result";
// $num=mysqli_num_rows($result);
if($result==1){
header('location:http://localhost/cvbuilder/login_proceed.html');
}
else{
header('location:http://localhost/cvbuilder/signup-us.html');

}
 ?>

