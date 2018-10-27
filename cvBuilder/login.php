<?php 
$username=$_POST['Username'];
$password=$_POST['Password'];
// echo "$username $password";
$con=mysqli_connect('localhost',"$username","$password");
mysqli_select_db($con,'users');
$q="select * from user_info";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<nav class="navbar navbar-inverse">
  <div class="container-fluid" style="border-radius: none">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color: blue">C.V Gene</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="cvbuilderhome.html">Home</a></li>
      <li><a href="index.php">CV Builder</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>

    </ul>
    <form class="navbar-form navbar-right" action="/action_page.php" >
      <div class="input-group" ">
        <!-- <input type="text" class="form-control" placeholder="Search" name="search"> -->
        <div class="input-group-btn">
          <!-- <button class="btn btn-default" type="submit"> -->
            <!-- <i class="glyphicon glyphicon-search"></i> -->
          </button>

        </div>
      </div>
    </form>
     <ul class="nav navbar-nav navbar-right">
<!--       <li><a href="Signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
 -->      <!-- <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
         <li><label id="hoverelement" style="color: white;font-size: 20px;margin-top: 10px;text-shadow: 2px 2px 4px #000000" >Hello, <span class="glyphicon glyphicon-user"></span> <?php if($username=="haider"){echo "Admin ";} echo ucfirst("$username,")?> <a href="cvbuilderhome.html" style="color: white">Logout</a></label></li>

    </ul>
  </div>
</nav>
<script>
// $(document).ready(function(){
//     $("label").hover(function(){
//         $(this).css("background-color", "yellow");
//         }, function(){
//         $(this).css("background-color", "pink");
//     });
// // });
// 	$(document).ready(function(e) {
//         $('#hoverelement').hover(function(){
// 				$main_text=$(this).text();
// 				$(this).text("Logout");
// 			},function(){
// 				$(this).text($main_text);
// 				});
//     });
</script>

</head>

<!DOCTYPE html>
	<html>
	<head>
		<link rel="stylesheet" type="text/css" href="newcss.css">
		<!-- <title></title> -->
	</head>
	<body>
		<h1><center> Hello Admin <?php echo "$username" ?> These are the Username's and Passwords.</center></h1>
		<table id="t1">
	<tr>
		<th>Username</th>
		<th>Password</th>
	</tr>

	<?php 
for ($i=1;$i<=$num;$i++) { 
	$row=mysqli_fetch_array($result);
	?>
	

<tr>
	<td> <?php echo $row['Username']; ?> </td>
	<td> <?php echo $row['Password']; ?> </td>
</tr>
<?php  } ?>
</table>

<?php
	
	mysqli_close($con);
	?>
	

<div class="container-fluid" style="background-color: black;width: 100%;height: 40px;color: white;text-align: right;margin-top: 30px"> Copyright © 2018 CV Genie. All rights reserved</div>
</body>
</html>