<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	p{
		color: red;
	}
</style>
</head>
<body>
<?php
$conn=mysqli_connect("localhost","root","","estore") or die('Error');

if (isset($_POST['bsubmit'])||isset($_POST['csubmit'])||isset($_POST['mcsubmit'])||isset($_POST['wcsubmit'])||isset($_POST['ccsubmit'])||isset($_POST['mssubmit'])||isset($_POST["wssubmit"])||isset($_POST['cssubmit'])) {
// include 'upload.php';
	$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "<p>File is an image - " . $check["mime"] . ".</p>";
        $uploadOk = 1;
    } else {
        echo "<p>File is not an image.</p>";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "<p>Sorry, file already exists.</p>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<p>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</p>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<p>Sorry, your file was not uploaded.</p>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "<p>Sorry, there was an error uploading your file.</p>";
    }
}

// echo "$target_file,$_POST[name],$_POST[writer],$_POST[price]";
if (isset($_POST['bsubmit'])) {
	

$loc=$target_file;
$name=$_POST['name'];
$writer=$_POST['writer'];
$price=$_POST['price'];
echo "<br>$loc<br>$name<br>$writer<br>$price";
$sql="INSERT INTO `books`( `image`, `name`, `writer`, `price`) values ('$loc','$name','$writer','$price');";
}
else if (isset($_POST['csubmit'])) {
	

$loc=$target_file;
$name=$_POST['brand'];
$writer=$_POST['details'];
$price=$_POST['price'];
// echo "<br>$loc<br>$name<br>$writer<br>$price";
$sql="INSERT INTO `Cosmetics`( `image`, `brand`, `details`, `price`) values ('$loc','$name','$writer','$price');";
}
else if (isset($_POST['ccsubmit'])) {
	

$loc=$target_file;
$name=$_POST['brand'];
$writer=$_POST['details'];
$price=$_POST['price'];
// echo "<br>$loc<br>$name<br>$writer<br>$price";
$sql="INSERT INTO `cclothes`( `image`, `brand`, `details`, `price`) values ('$loc','$name','$writer','$price');";
}
else if (isset($_POST['mcsubmit'])) {
	

$loc=$target_file;
$name=$_POST['brand'];
$writer=$_POST['details'];
$price=$_POST['price'];
echo "<br>$loc<br>$name<br>$writer<br>$price";
$sql="INSERT INTO `mclothes`( `image`, `brand`, `details`, `price`) values ('$loc','$name','$writer','$price');";
}
else if (isset($_POST['wcsubmit'])) {
	

$loc=$target_file;
$name=$_POST['brand'];
$writer=$_POST['details'];
$price=$_POST['price'];
// echo "<br>$loc<br>$name<br>$writer<br>$price";
$sql="INSERT INTO `wclothes`( `image`, `brand`, `details`, `price`) placeholderS ('$loc','$name','$writer','$price');";
}
else if (isset($_POST['cssubmit'])) {
	

$loc=$target_file;
$name=$_POST['brand'];
$writer=$_POST['details'];
$price=$_POST['price'];
// echo "<br>$loc<br>$name<br>$writer<br>$price";
$sql="INSERT INTO `cshoes`( `image`, `brand`, `details`, `price`) values ('$loc','$name','$writer','$price');";
}
else if (isset($_POST['mssubmit'])) {
	

$loc=$target_file;
$name=$_POST['brand'];
$writer=$_POST['details'];
$price=$_POST['price'];
// echo "<br>$loc<br>$name<br>$writer<br>$price";
$sql="INSERT INTO `mshoes`( `image`, `brand`, `details`, `price`) values ('$loc','$name','$writer','$price');";
}
else if (isset($_POST['wssubmit'])) {
	

$loc=$target_file;
$name=$_POST['brand'];
$writer=$_POST['details'];
$price=$_POST['price'];
// echo "<br>$loc<br>$name<br>$writer<br>$price";
$sql="INSERT INTO `wshoes`( `image`, `brand`, `details`, `price`) values ('$loc','$name','$writer','$price');";
}
echo "$sql";
$res=mysqli_query($conn,$sql);

if ($res) {
		echo "<script>alert('Record Uploaded Successfully')</script>";
	}	
	else{
		echo "<script>alert('Error');</script>";

	}
}
?>
<h1><center>ADMIN PANEL</center></h1>
<div style="margin-left: 5%; width: 300px;height: 1650px;border-style: solid;border-width: 2px;">
<h1><center>Record Entries</center></h1>
<table align="center">
<form  method="post" enctype="multipart/form-data">
<h2><center>Book Entries</center></h2>
<tr><td><input type="file" name="fileToUpload" ></td></tr>
<tr><td><input type="text" name="name" placeholder="Book Name"></td></tr>
<tr><td><input type="text" name="writer" placeholder="Writer"></td></tr>
<tr><td><input type="text" name="price" placeholder="Price/Rs"></td></tr>
<tr><td><input type="submit" name="bsubmit" ></td></tr>
</form>

<table align="center" >
<form  method="post" enctype="multipart/form-data">
<h2><center>Men Clothes</center></h2>
<tr><td><input type="file" name="fileToUpload" ></td></tr>
<tr><td><input type="text" name="brand" placeholder="Brand Name"></td></tr>
<tr><td><input type="text" name="details" placeholder="Details"></td></tr>
<tr><td><input type="text" name="price" placeholder="Price/Rs"></td></tr>	
<tr><td><input type="submit" name="mcsubmit" ></td></tr>

</form>	

</table>

<table  align="center">
<form  method="post" enctype="multipart/form-data">
<h2><center>Women Clothes</center></h2>
<tr><td><input type="file" name="fileToUpload" ></td></tr>
<tr><td><input type="text" name="brand" placeholder="Brand Name"></td></tr>
<tr><td><input type="text" name="details" placeholder="Details"></td></tr>
<tr><td><input type="text" name="price" placeholder="Price/Rs"></td></tr>	
<tr><td><input type="submit" name="wcsubmit" ></td></tr>

</form>	

</table>

<table align="center">
<form  method="post" enctype="multipart/form-data">
<h2><center>Children Clothes</center></h2>
<tr><td><input type="file" name="fileToUpload" ></td></tr>
<tr><td><input type="text" name="brand" placeholder="Brand Name"></td></tr>
<tr><td><input type="text" name="details" placeholder="Details"></td></tr>
<tr><td><input type="text" name="price" placeholder="Price/Rs"></td></tr>	
<tr><td><input type="submit" name="ccsubmit" ></td></tr>

</form>	
</table>

<table align="center">
<form  method="post" enctype="multipart/form-data">
<h2><center>Cosmetics</center></h2>
<tr><td><input type="file" name="fileToUpload" ></td></tr>
<tr><td><input type="text" name="brand" placeholder="Brand Name"></td></tr>
<tr><td><input type="text" name="details" placeholder="Details"></td></tr>
<tr><td><input type="text" name="price" placeholder="Price/Rs"></td></tr>	
<tr><td><input type="submit" name="csubmit" ></td></tr>

</form>	
</table>

<table align="center">
<form  method="post" enctype="multipart/form-data">
<h2><center>Men Shoes</center></h2>
<tr><td><input type="file" name="fileToUpload" ></td></tr>
<tr><td><input type="text" name="brand" placeholder="Brand Name"></td></tr>
<tr><td><input type="text" name="details" placeholder="Details"></td></tr>
<tr><td><input type="text" name="price" placeholder="Price/Rs"></td></tr>	
<tr><td><input type="submit" name="mssubmit" ></td></tr>

</form>	

</table>

<table align="center">
<form  method="post" enctype="multipart/form-data">
<h2><center>Women Shoes</center></h2>
<tr><td><input type="file" name="fileToUpload" ></td></tr>
<tr><td><input type="text" name="brand" placeholder="Brand Name"></td></tr>
<tr><td><input type="text" name="details" placeholder="Details"></td></tr>
<tr><td><input type="text" name="price" placeholder="Price/Rs"></td></tr>	
<tr><td><input type="submit" name="wssubmit" ></td></tr>

</form>	

</table>

<table align="center">
<form  method="post" enctype="multipart/form-data">
<h2><center>Children Shoes</center></h2>
<tr><td><input type="file" name="fileToUpload" ></td></tr>
<tr><td><input type="text" name="brand" placeholder="Brand Name"></td></tr>
<tr><td><input type="text" name="details" placeholder="Details"></td></tr>
<tr><td><input type="text" name="price" placeholder="Price/Rs"></td></tr>	
<tr><td><input type="submit" name="cssubmit" ></td></tr>

</form>	

</table>
</div>
</body>
</html>