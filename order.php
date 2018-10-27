<?php 

session_start();
$con=mysqli_connect('localhost','root','','EUser');

	foreach ($_POST as $key => $value) {
		$details[$key]=$value;
	}
// $order="INSERT INTO `orders`(`Product_Name`, `Product_id`, `Price`) VALUES ('$_SESSION['']')"
$insert="INSERT INTO `address`( `Username`,`fname`, `lname`, `email`, `Mobile`, `company`, `address1`, `address2`, `city`, `postcode`) VALUES ('$_SESSION[Username]','$details[fname]','$details[lname]','$details[email]','$details[mobile]','$details[company]','$details[address1]','$details[address2]','$details[city]','$details[postcode]')";

$result=mysqli_query($con,$insert);

// if(mysqli_num_rows($result)>0){
	// $num=mysqli_num_rows($result);
// echo "$insert";
	if ($result) {
		echo "insert query successfull ";
	}
	else{
		echo "failed in inserting query";
	}















foreach ($_SESSION as $key => $value) {
foreach ($value as $key2 => $value2) {
// echo "$value2[name]";
$orders = array('name' =>$value2['name'] ,'size'=>$value2['size'],'qty'=>$value2['qty'],'price'=>$value2['price'] );
echo "<br>";

$total=$orders['qty']*$orders['price'];
$sql="INSERT INTO `orders`(`Username`, `Product_Name`, `Size`, `qty`, `Total`, `Date&time`) VALUES ('$_SESSION[Username]','$orders[name]','$orders[size]','$orders[qty]','$total',NOW())";
// print_r($orders);
$result=mysqli_query($con,$sql);
unset($_SESSION[$key][$key2]);

// if ($result) {
	
// }
// else
// echo "unsuccessfull";

// echo "$sql";
}
 // }
}
header("location:index.php");
// $sql=mysqli_query($con,$user);									
?>