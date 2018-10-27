<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link href="themes/css/flexslider.css" rel="stylesheet"/>
            <link href="themes/css/main.css" rel="stylesheet"/>

<style type="text/css">
	p{
		color: red;
	}
</style>
</head>
<body style="background-color:transparent;">
<?php
$conn=mysqli_connect("localhost","root","","estore") or die('E0rror');

if (isset($_POST['bsubmit'])||isset($_POST['ubsubmit'])||isset($_POST['slidersubmit'])||isset($_POST['islidersubmit'])||isset($_POST['umcsubmit'])||isset($_POST['uwcsubmit'])||isset($_POST['uccsubmit'])||isset($_POST['ucsubmit'])||isset($_POST['ussubmit'])||isset($_POST['csubmit'])||isset($_POST['mcsubmit'])||isset($_POST['wcsubmit'])||isset($_POST['ccsubmit'])||isset($_POST['mssubmit'])||isset($_POST["wssubmit"])||isset($_POST['cssubmit'])) {
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
if ($_FILES["fileToUpload"]["size"] > 1000000) {
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
// echo "<br>$loc<br>$name<br>$writer<br>$price";
if($loc!=null&&$name!=null&&$writer!=null&&$price!=null)
$sql="INSERT INTO `books`( `image`, `name`, `writer`, `price`) values ('$loc','$name','$writer','$price');";
else
die("Error invalid input");
}
else if (isset($_POST['csubmit'])) {
	

$loc=$target_file;
$name=$_POST['brand'];
$writer=$_POST['details'];
$price=$_POST['price'];
// echo "<br>$loc<br>$name<br>$writer<br>$price";
if($loc!=null&&$name!=null&&$writer!=null&&$price!=null)

$sql="INSERT INTO `Cosmetics`( `image`, `brand`, `details`, `price`) values ('$loc','$name','$writer','$price');";
else
die("Error invalid input");
}
else if (isset($_POST['islidersubmit'])) {
    

$loc=$target_file;
// $name=$_POST['brand'];
// $namesl=$_POST['name'];
// $price=$_POST['price'];
// echo "<br>$loc<br>$name<br>$writer<br>$price";
if($loc!=null){

$sqli="INSERT INTO `slider`(`image`) VALUES ('$loc')";
$resulti=mysqli_query($conn,$sqli);
if ($resulti) {
    echo "<script>alert('Image Entered Successfully in Slider');</script>";
    }
    else{
    echo "<script>alert('Image Entered Failed in Slider');</script>";
}
}
else
die("Error invalid input");
}

else if (isset($_POST['ccsubmit'])) {
	

$loc=$target_file;
$name=$_POST['brand'];
$writer=$_POST['details'];
$price=$_POST['price'];
// echo "<br>$loc<br>$name<br>$writer<br>$price";
if($loc!=null&&$name!=null&&$writer!=null&&$price!=null){
    $sql="INSERT INTO `cclothes`( `image`, `brand`, `details`, `price`) values ('$loc','$name','$writer','$price');";
    // echo "$sql";
}

else{
die("Error invalid input");
}
}
else if (isset($_POST['mcsubmit'])) {
	

$loc=$target_file;
$name=$_POST['brand'];
$writer=$_POST['details'];
$price=$_POST['price'];
// echo "<br>$loc<br>$name<br>$writer<br>$price";
if($loc!=null&&$name!=null&&$writer!=null&&$price!=null)

$sql="INSERT INTO `mclothes`( `image`, `brand`, `details`, `price`) values ('$loc','$name','$writer','$price');";
else
die("Error invalid input");
}
else if (isset($_POST['wcsubmit'])) {
	

$loc=$target_file;
$name=$_POST['brand'];
$writer=$_POST['details'];
$price=$_POST['price'];
// echo "<br>$loc<br>$name<br>$writer<br>$price";
if($loc!=null&&$name!=null&&$writer!=null&&$price!=null)

$sql="INSERT INTO `wclothes`( `image`, `brand`, `details`, `price`) values ('$loc','$name','$writer','$price');";
else
die("Error invalid input");
}
else if (isset($_POST['cssubmit'])) {
	

$loc=$target_file;
$name=$_POST['brand'];
$writer=$_POST['details'];
$price=$_POST['price'];
// echo "<br>$loc<br>$name<br>$writer<br>$price";
if($loc!=null&&$name!=null&&$writer!=null&&$price!=null)

$sql="INSERT INTO `cshoes`( `image`, `brand`, `details`, `price`) values ('$loc','$name','$writer','$price');";
else
die("Error invalid input");
}
else if (isset($_POST['mssubmit'])) {
	

$loc=$target_file;
$name=$_POST['brand'];
$writer=$_POST['details'];
$price=$_POST['price'];
// echo "<br>$loc<br>$name<br>$writer<br>$price";
if($loc!=null&&$name!=null&&$writer!=null&&$price!=null)

$sql="INSERT INTO `shoes`( `image`, `brand`, `details`, `price`) values ('$loc','$name','$writer','$price');";
else
die("Error invalid input");
}
// else if (isset($_POST['wssubmit'])) {
	

// $loc=$target_file;
// $name=$_POST['brand'];
// $writer=$_POST['details'];
// $price=$_POST['price'];
// // echo "<br>$loc<br>$name<br>$writer<br>$price";
// if($loc!=null&&$name!=null&&$writer!=null&&$price!=null)
// $sql="INSERT INTO `wshoes`( `image`, `brand`, `details`, `price`) values ('$loc','$name','$writer','$price');";
// else
// die("Error invalid input");
// }
// // echo "$sql";
if (isset($_POST['bsubmit'])||isset($_POST['csubmit'])||isset($_POST['mcsubmit'])||isset($_POST['wcsubmit'])||isset($_POST['ccsubmit'])||isset($_POST['mssubmit'])||isset($_POST["wssubmit"])||isset($_POST['cssubmit'])) {

$res=mysqli_query($conn,$sql);
// echo "$sql";
if ($res) {
		echo "<script>alert('Record Uploaded Successfully')</script>";
	}	
	else{
		echo "<script>alert('Error');</script>";

	}
}}
?>

<?php
if (isset($_POST['slidersubmit'])) {
    $sqlsl="UPDATE `slider` SET `image`='$target_file' WHERE id='$_POST[id]';";

    // echo "$sql";
    $resultsl = mysqli_query($conn, $sqlsl);
    if ($resultsl) {
        echo "<script>alert('Successfully Updated Record');</script>";
    }
    else
        echo "<script>alert('Record Update Failed');</script>";

}
if (isset($_POST['ubsubmit'])) {
    $sql="UPDATE `books` SET `image`='$target_file',`name`='$_POST[name]',`writer`='$_POST[writer]',`price`='$_POST[price]' WHERE id='$_POST[id]';";
    // echo "$sql";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Successfully Updated Record');</script>";
    }
    else
        echo "<script>alert('Record Update Failed');</script>";

}
if (isset($_POST['umcsubmit'])) {
    $sql="UPDATE `mclothes` SET `image`='$target_file',`brand`='$_POST[brand]',`details`='$_POST[details]',`price`='$_POST[price]' WHERE id='$_POST[id]';";

    // echo "$sql";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Successfully Updated Record');</script>";
    }
    else
        echo "<script>alert('Record Update Failed');</script>";

}
if (isset($_POST['uwcsubmit'])) {
    $sqlw="UPDATE `wclothes` SET `image`='$target_file',`brand`='$_POST[brand]',`details`='$_POST[details]',`price`='$_POST[price]' WHERE id='$_POST[id]';";
    echo "$sql";
    $resultw = mysqli_query($conn, $sqlw);
    if ($resultw) {
        echo "<script>alert('Successfully Updated Record');</script>";
    }
    else
        echo "<script>alert('Record Update Failed');</script>";

}
if (isset($_POST['uccsubmit'])) {
    $sqlcc="UPDATE `cclothes` SET `image`='$target_file',`brand`='$_POST[brand]',`details`='$_POST[details]',`price`='$_POST[price]' WHERE id='$_POST[id]';";
    // echo "$sql";
    $resultcc = mysqli_query($conn, $sqlcc);
    if ($resultcc) {
        echo "<script>alert('Successfully Updated Record');</script>";
    }
    else
        echo "<script>alert('Record Update Failed');</script>";

}
if (isset($_POST['ussubmit'])) {
    $sqlss="UPDATE `shoes` SET `image`='$target_file',`brand`='$_POST[brand]',`details`='$_POST[details]',`price`='$_POST[price]' WHERE id='$_POST[id]';";
    // echo "$sql";
    $resultss = mysqli_query($conn, $sqlss);
    if ($resultss) {
        echo "<script>alert('Successfully Updated Record');</script>";
    }
    else
        echo "<script>alert('Record Update Failed');</script>";

}
if (isset($_POST['ucsubmit'])) {
    $sqlccc="UPDATE `cosmetics` SET `image`='$target_file',`brand`='$_POST[brand]',`details`='$_POST[details]',`price`='$_POST[price]' WHERE id='$_POST[id]';";
    // echo "$sql";
    $resultccc = mysqli_query($conn, $sqlccc);
    if ($resultccc) {
        echo "<script>alert('Successfully Updated Record');</script>";
    }
    else
        echo "<script>alert('Record Update Failed');</script>";

}

  ?>
<style type="text/css">
    .one{
        margin-left:0.4%;
        border-width: 2px;
        border-style: solid;
        border-color: black;
        width: 99%;
        height: 400px;
        margin-bottom: 5%;
        margin-top: 5%;
        background-color: #0277BD;
        box-shadow: 10px 10px 5px grey;

    }

    table {
       border-width: 2px;
        border-style: solid;
        width: 30%;
        height: 70%;
        margin-left: 2%; 
        text-align: center;
        background-color: white;
        border-color: black;
            box-shadow: 10px 10px 5px #0288D1;


    }
    h2{
                border-width: 2px;
        border-style: solid;
                margin-left: ;
                background-color: black;
                color: white;
                text-align: center;
    }
    
</style>
<!-- <h1> <center>ADMIN PANEL</center> </h1> -->
<div style="float: ;align-items:center; width: 100%;height:auto;border-style: solid;border-width: 2px; ">
<div>
<img style="width: 100%" src="themes/images/admin.jpg">
</div>
<h1> <center>Record Entries </center></h1>
<div class="one">
<div style="float: right;    overflow: scroll;width: 30%;height: 350px;margin-top: 3.5%;border-width: 3px;border-style: solid;">
<?php
if(isset($_GET["edit"])){

$query = "DELETE FROM `slider` WHERE `id`='$_GET[edit]'";
// echo "$query";

$res = mysqli_query($conn, $query);

}

$sql = "SELECT * from slider;";

$result = mysqli_query($conn, $sql);

$i=0;


if (mysqli_num_rows($result) > 0) {

    // output data of each row

            echo "<table border='2' width='600'><th>id</th><th>image</th><th>Delete</th>";

    while($row = mysqli_fetch_assoc($result)) {

         echo "<tr><td>". $row["id"]

        . "</td>"."<td>" . $row["image"]. "</td>" ."<td
        <input type='radio' name=row><button><a href='adminpanel.php?edit=$row[id]'>Delete</a></button></td><tr>";
    }

    echo "</table>";

} else {

    echo "0 results";


}


// mysqli_close($conn);

?> 

    
</div>

<table >
<form  method="post" enctype="multipart/form-data" >
<h2> Slider Entries </h2>
<tr><td><input type="file" name="fileToUpload" required ></td></tr>
<!-- <tr><td><input type="text" name="name" placeholder="Details" ></td></tr> -->
<tr><td><input type="text" name="id" placeholder="Use Incase Of Updating Data"></td></tr>
<tr><td><input type="submit" name="islidersubmit" value="Insert" ><input type="submit" name="slidersubmit" value="Update" ></td></tr>

</form>
</table>

</div>

<div class="one">
<div style="float: right;    overflow: scroll;width: 30%;height: 350px;margin-top: 3.5%;border-width: 3px;border-style: solid;">
<?php
if(isset($_GET["edit"])){

$query = "DELETE FROM `books` WHERE `id`='$_GET[edit]'";
// echo "$query";

$res = mysqli_query($conn, $query);

}

$sql = "SELECT * from books;";

$result = mysqli_query($conn, $sql);

$i=0;


if (mysqli_num_rows($result) > 0) {

    // output data of each row

            echo "<table border='2' width='600'><th>id</th><th>Name</th><th>writer</th><th>price</th><th>Delete</th>";

    while($row = mysqli_fetch_assoc($result)) {

         echo "<tr><td>". $row["id"]

        . "</td>"."<td>" . $row["name"]. "</td>" ."<td>". $row["writer"]."</td>"."<td>".$row["price"]."</td>"."<td>
        <input type='radio' 
        name=row><button><a href='adminpanel.php?edit=$row[id]'>Delete</a></button></td><tr>";
    }

    echo "</table>";

} else {

    echo "0 results";


}


// mysqli_close($conn);

?> 

    
</div>

<table >
<form  method="post" enctype="multipart/form-data" >
<h2> Book Entries </h2>
<tr><td><input type="file" name="fileToUpload" required ></td></tr>
<tr><td><input type="text" name="name" placeholder="Book Name" required></td></tr>
<tr><td><input type="text" name="writer" placeholder="Writer" required></td></tr>
<tr><td><input type="text" name="price" placeholder="Price/Rs" required></td></tr>
<tr><td><input type="text" name="id" placeholder="Use Incase Of Updating Data"></td></tr>
<tr><td><input type="submit" name="bsubmit" value="Insert" ><input type="submit" name="ubsubmit" value="Update" ></td></tr>

</form>
</table>

</div>

<div class="one">
<div style="float: right;    overflow: scroll;width: 30%;height: 350px;margin-top: 3.5%;border-width: 3px;border-style: solid;">
<?php
if(isset($_GET["edit"])){

$query = "DELETE FROM `mclothes` WHERE `id`='$_GET[edit]'";
// echo "$query";

$res = mysqli_query($conn, $query);

}

$sqlm = "SELECT * from `mclothes`;";

$resultm = mysqli_query($conn, $sqlm);

$i=0;


if (mysqli_num_rows($resultm) > 0) {

    // output data of each row

            echo "<table border='2' width='600'><th>id</th><th>Brand</th><th>Details</th><th>price</th><th>Delete</th>";

    while($row = mysqli_fetch_assoc($resultm)) {

         echo "<tr><td>". $row["id"]

        . "</td>"."<td>" . $row["brand"]. "</td>" ."<td>". $row["details"]."</td>"."<td>".$row["price"]."</td>"."<td>
        <input type='radio' 
        name=row><button><a href='adminpanel.php?edit=$row[id]'>Delete</a></button></td><tr>";
    }

    echo "</table>";

} else {

    echo "0 results";


}


// mysqli_close($conn);

?> 

    
</div>

<table >
<form  method="post" enctype="multipart/form-data">
<h2> Men Clothes </h2>
<tr><td><input type="file" name="fileToUpload" required></td></tr>
<tr><td><input type="text" name="brand" placeholder="Brand Name" required></td></tr>
<tr><td><input type="text" name="details" placeholder="Details" required></td></tr>
<tr><td><input type="text" name="price" placeholder="Price/Rs" required></td></tr>	
<tr><td><input type="text" name="id" placeholder="Enter Update ID"></td></tr>
<tr><td><input type="submit" name="mcsubmit" ><input type="submit" name="umcsubmit" value="Update"></tr>
</form>	
</table>

</div>

<div class="one">
<div style="float: right;    overflow: scroll;width: 30%;height: 350px;margin-top: 3.5%;border-width: 3px;border-style: solid;">
<?php
if(isset($_GET["edit"])){

$query = "DELETE FROM `wclothes` WHERE `id`='$_GET[edit]'";
// echo "$query";

$res = mysqli_query($conn, $query);

}

$sqlm = "SELECT * from `wclothes`;";

$resultm = mysqli_query($conn, $sqlm);

$i=0;


if (mysqli_num_rows($resultm) > 0) {

    // output data of each row

            echo "<table border='2' width='600'><th>id</th><th>Brand</th><th>Details</th><th>price</th><th>Delete</th>";

    while($row = mysqli_fetch_assoc($resultm)) {

         echo "<tr><td>". $row["id"]

        . "</td>"."<td>" . $row["brand"]. "</td>" ."<td>". $row["details"]."</td>"."<td>".$row["price"]."</td>"."<td>
        <input type='radio' 
        name=row><button><a href='adminpanel.php?edit=$row[id]'>Delete</a></button></td><tr>";
    }

    echo "</table>";

} else {

    echo "0 results";


}


// mysqli_close($conn);

?> 

    
</div>
<table  >
<form  method="post" enctype="multipart/form-data">
<h2> Women Clothes </h2>
<tr><td><input type="file" name="fileToUpload" required ></td></tr>
<tr><td><input type="text" name="brand" placeholder="Brand Name" required></td></tr>
<tr><td><input type="text" name="details" placeholder="Details" required></td></tr>
<tr><td><input type="text" name="price" placeholder="Price/Rs" required></td></tr>	
<tr><td><input type="text" name="id" placeholder="Enter Update ID"></td></tr>
<tr><td><input type="submit" name="wcsubmit" ><input type="submit" name="uwcsubmit" value="Update"></tr>

</form>	
</table>
</div>

<div class="one">
<div style="float: right;    overflow: scroll;width: 30%;height: 350px;margin-top: 3.5%;border-width: 3px;border-style: solid;">
<?php
if(isset($_GET["edit"])){

$query = "DELETE FROM `cclothes` WHERE `id`='$_GET[edit]'";
// echo "$query";

$res = mysqli_query($conn, $query);

}

$sqlm = "SELECT * from `cclothes`;";

$resultm = mysqli_query($conn, $sqlm);

$i=0;


if (mysqli_num_rows($resultm) > 0) {

    // output data of each row

            echo "<table border='2' width='600'><th>id</th><th>Brand</th><th>Details</th><th>price</th><th>Delete</th>";

    while($row = mysqli_fetch_assoc($resultm)) {

         echo "<tr><td>". $row["id"]

        . "</td>"."<td>" . $row["brand"]. "</td>" ."<td>". $row["details"]."</td>"."<td>".$row["price"]."</td>"."<td>
        <input type='radio' 
        name=row><button><a href='adminpanel.php?edit=$row[id]'>Delete</a></button></td><tr>";
    }

    echo "</table>";

} else {

    echo "0 results";


}


// mysqli_close($conn);

?> 

    
</div>
<table >
<form  method="post" enctype="multipart/form-data">
<h2> Children Clothes </h2>
<tr><td><input type="file" name="fileToUpload" required ></td></tr>
<tr><td><input type="text" name="brand" placeholder="Brand Name" required></td></tr>
<tr><td><input type="text" name="details" placeholder="Details" required></td></tr>
<tr><td><input type="text" name="price" placeholder="Price/Rs" required></td></tr>	
<tr><td><input type="text" name="id" placeholder="Enter Update ID"></td></tr>
<tr><td><input type="submit" name="ccsubmit" ><input type="submit" name="uccsubmit" value="Update"></tr>

</form>	
</table>
</div>


<div class="one">
<div style="float: right;    overflow: scroll;width: 30%;height: 350px;margin-top: 3.5%;border-width: 3px;border-style: solid;">
<?php
if(isset($_GET["edit"])){

$query = "DELETE FROM `cosmetics` WHERE `id`='$_GET[edit]'";
// echo "$query";

$res = mysqli_query($conn, $query);

}

$sqlm = "SELECT * from `cosmetics`;";

$resultm = mysqli_query($conn, $sqlm);

$i=0;


if (mysqli_num_rows($resultm) > 0) {

    // output data of each row

            echo "<table border='2' width='600'><th>id</th><th>Brand</th><th>Details</th><th>price</th><th>Delete</th>";

    while($row = mysqli_fetch_assoc($resultm)) {

         echo "<tr><td>". $row["id"]

        . "</td>"."<td>" . $row["brand"]. "</td>" ."<td>". $row["details"]."</td>"."<td>".$row["price"]."</td>"."<td>
        <input type='radio' 
        name=row><button><a href='adminpanel.php?edit=$row[id]'>Delete</a></button></td><tr>";
    }

    echo "</table>";

} else {

    echo "0 results";


}


// mysqli_close($conn);
1
?> 

    
</div>
<table >
<form  method="post" enctype="multipart/form-data">
<h2> Cosmetics </h2>
<tr><td><input type="file" name="fileToUpload" required></td></tr>
<tr><td><input type="text" name="brand" placeholder="Brand Name" required></td></tr>
<tr><td><input type="text" name="details" placeholder="Details" required></td></tr>
<tr><td><input type="text" name="price" placeholder="Price/Rs" required></td></tr>	
<tr><td><input type="text" name="id" placeholder="Enter Update ID"></td></tr>
<tr><td><input type="submit" name="csubmit" ><input type="submit" name="ucsubmit" value="Update"></tr>

</form>	
</table>
</div>

<div class="one">
<div style="float: right;    overflow: scroll;width: 30%;height: 350px;margin-top: 3.5%;border-width: 3px;border-style: solid;">
<?php
if(isset($_GET["edit"])){

$query = "DELETE FROM `shoes` WHERE `id`='$_GET[edit]'";
// echo "$query";

$res = mysqli_query($conn, $query);

}

$sqlm = "SELECT * from `shoes`;";

$resultm = mysqli_query($conn, $sqlm);

$i=0;


if (mysqli_num_rows($resultm) > 0) {

    // output data of each row

            echo "<table border='2' width='600'><th>id</th><th>Brand</th><th>Details</th><th>price</th><th>Delete</th>";

    while($row = mysqli_fetch_assoc($resultm)) {

         echo "<tr><td>". $row["id"]

        . "</td>"."<td>" . $row["brand"]. "</td>" ."<td>". $row["details"]."</td>"."<td>".$row["price"]."</td>"."<td>
        <input type='radio' 
        name=row><button><a href='adminpanel.php?edit=$row[id]'>Delete</a></button></td><tr>";
    }

    echo "</table>";

} else {

    echo "0 results";


}


// mysqli_close($conn);

?> 

    
</div>
<table >
<form  method="post" enctype="multipart/form-data">
<h2> Shoes </h2>
<tr><td><input type="file" name="fileToUpload"  required></td></tr>
<tr><td><input type="text" name="brand" placeholder="Brand Name" required></td></tr>
<tr><td><input type="text" name="details" placeholder="Details" required></td></tr>
<tr><td><input type="text" name="price" placeholder="Price/Rs" required></td></tr>	
<tr><td><input type="text" name="id" placeholder="Enter Update ID"></td></tr>
<tr><td><input type="submit" name="mssubmit" ><input type="submit" name="ussubmit" value="Update"></tr>

</form>
</table>
</div>

<!-- 
</table>

<table >
<form  method="post" enctype="multipart/form-data">
<h2> Women Shoes </h2>
<tr><td><input type="file" name="fileToUpload" required ></td></tr>
<tr><td><input type="text" name="brand" placeholder="Brand Name" required></td></tr>
<tr><td><input type="text" name="details" placeholder="Details" required></td></tr>
<tr><td><input type="text" name="price" placeholder="Price/Rs" required></td></tr>	
<tr><td><input type="submit" name="wssubmit" ></td></tr>

</form>	

</table>

<table >
<form  method="post" enctype="multipart/form-data">
<h2> Children Shoes </h2>
<tr><td><input type="file" name="fileToUpload" required ></td></tr>
<tr><td><input type="text" name="brand" placeholder="Brand Name" required></td></tr>
<tr><td><input type="text" name="details" placeholder="Details" required></td></tr>
<tr><td><input type="text" name="price" placeholder="Price/Rs" required></td></tr>	
<tr><td><input type="submit" name="cssubmit" ></td></tr>

</form>	 -->

<!-- </table> -->
</div>
</body>
</html>