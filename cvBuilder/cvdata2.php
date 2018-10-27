<?php
session_start();

$target_dir = "Uploads/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
// echo "$target_file";
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }
// Check file size
if ($_FILES["photo"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}




// if(isset($_POST['matric']))
  // header(header('location:http://localhost/cvbuilder/login_proceed.html')
// $matric=$_POST['matric'];

// if(isset($_POST['Institute1']))

// $Institute1=$_POST['Institute1'];

// if(isset($_POST['myear']))

// $myear=$_POST['myear'];

// if(isset($_POST['inter']))

// $inter=$_POST['inter'];
// if(isset($_POST['Institute2']))

// $Institute2=$_POST['Institute2'];
// if(isset($_POST['iyear']))

// $iyear=$_POST['iyear'];
// if(isset($_POST['bachelor']))

// $bachelor=$_POST['bachelor'];

// if(isset($_POST['Institute3']))

// $Institute3=$_POST['Institute3'];
// if(isset($_POST['byear']))

// $byear=$_POST['byear'];
// if(isset($_POST['master']))

// $master=$_POST['master'];
// if(isset($_POST['Institute4']))

// $Institute4=$_POST['Institute4'];
// if(isset($_POST['msyear']))

// $msyear=$_POST['msyear'];
// if(isset($_POST['higher']))

// $higher=$_POST['higher'];
// if(isset($_POST['Institute5']))

// $Institute5=$_POST['Institute5'];
// if(isset($_POST['hyear']))

// $hyear=$_POST['hyear'];
// if(isset($_POST['exp1']))

// $exp1=$_POST['exp1'];
// if(isset($_POST['f1Date']))

// $f1Date=$_POST['f1Date'];
// if(isset($_POST['t1Date']))

// $t1Date=$_POST['t1Date'];
// if(isset($_POST['exp2']))

// $exp2=$_POST['exp2'];
// if(isset($_POST['f2Date']))

// $f2Date=$_POST['f2Date'];
// if(isset($_POST['t2Date']))

// $t2Date=$_POST['t2Date'];
// if(isset($_POST['f3Date']))

// $exp3=$_POST['exp3'];
// if(isset($_POST['exp3']))


// $f3Date=$_POST['f3Date'];
// if(isset($_POST['t3Date']))

// $t3Date=$_POST['t3Date'];
// if(isset($_POST['FName']))

// $FName=$_POST['FName'];
// if(isset($_POST['dob']))

// $dob=$_POST['dob'];
// if(isset($_POST['cnic']))

// $cnic=$_POST['cnic'];
// if(isset($_POST['email']))

// $email=$_POST['email'];
// if(isset($_POST['phone']))

// $phone=$_POST['phone'];
// if(isset($_POST['address']))

// $address=$_POST['address'];
// if(isset($_POST['photo']))
// echo "$target_dir";
// $photo=$target_file;
// echo "<br>$_SESSION[photo]";
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'User');

foreach ($_POST as $key => $value) {
    if ($value==null) {
       unset($key);
       // unset($value);
    }
    else if($value!="Submit"){
        $_SESSION[$key]=$value;

        echo "<br>$_SESSION[$key]";
        // unset($_SESSION['Submit']);
    }
    $_SESSION['photo']=$target_file;

      }
// echo "$_SESSION[dob]";
// $username=$_SESSION['Username'];
// $q="INSERT INTO cv2(Username,FName, dob, cnic, email, phone, address, photo, matric, Institute1, myear, inter, Institute2, iyear, bachelor, Institute3, byear, master, Institute4, msyear, higher, Institute5, hyear, exp1, f1Date, t1Date, exp2, f2Date, t2Date, exp3, f3Date, t3Date) VALUES 
// (
// '$username'
// ,'$FName'
// ,'$dob'
// ,'$cnic'
// ,'$email'
// ,'$phone'
// ,'$address'
// ,'$photo'
// ,'$matric'
// ,'$Institute1'
// ,'$myear'

// ,'$inter'
// ,'$Institute2'
// ,'$iyear'

// ,'$bachelor'
// ,'$Institute3'
// ,'$byear'

// ,'$master'
// ,'$Institute4'
// ,'$msyear'

// ,'$higher'
// ,'$Institute5'
// ,'$hyear'

// ,'$exp1'
// ,'$f1Date'
// ,'$t1Date'

// ,'$exp2'
// ,'$f2Date'
// ,'$t2Date'

// ,'$exp3'
// ,'$f3Date'
// ,'$t3Date'
// )";
// $result=mysqli_query($con,$q);
// $num=mysqli_num_rows($result);
// echo "$num";
// mysqli_close($con);
// if($num==1){
// 	$_SESSION['Username']=$username;
// 	header('location:http://localhost/cvbuilder/cvbuilderhome_login.php');
// }
// else
// {
// header('location:http://localhost/cvbuilder/login_invalid.html');
mysqli_close($con);
// }

header('location:http://localhost/cvbuilder/cv2.php');

 ?>
