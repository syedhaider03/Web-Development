<?php 
session_start();
if (isset($_SESSION['Username'])) {
}
else{
	header("location:register.php?signin=false");
}
$con=mysqli_connect('localhost','root','','EUser');
// mysqli_select_db($con,'EUser');
$user= "SELECT `Username` FROM `address` WHERE Username='$_SESSION[Username]';";
$check=mysqli_query($con,$user);

$select="SELECT  `Username`, `fname`, `lname`, `email`, `Mobile`, `company`, `address1`, `address2`, `city`, `postcode` FROM `address` WHERE username='$_SESSION[Username]'";
// echo $check; 
$checku=mysqli_num_rows($check);

if ($checku) {
	$result=mysqli_query($con,$select);
	$num=mysqli_num_rows($result);
// echo "$select";
// if (mysqli_num_rows($result) > 0) {

	if ($num){
		// while($row = mysqli_fetch_assoc($result));
	  	foreach ($result as $key => $value) {

	  	
	  	foreach ($value as $key2 => $value1) {
	  // $info[$key]=$value;
	  		$info[$key2]=$value1;

	  	}
	  }
	  	  	// echo "$info[fname]";

	  	// print_r($info);
}
// }
else{
echo "error in select query";	
}
}

if (isset($_POST['submit'])) {
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
}
// }

 ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Checkout</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
<div id="top-bar" class="container" >
		<a href="index.php" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a>
					
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form"> 
      <table style="margin-left:20% "><tr><td><input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text" style="width: 400px;height: 30px;margin-bottom: -20px;margin-top: -1px;align-self: center;color: black"></td>
              <td><button class="btn btn-default" type="submit" style="margin-bottom: -20px;margin-top: -1px"><i class="glyphicon glyphicon-search"></i></button></td></tr>
<!-- 
      <div class="input-group-btn" style="float: right;">
        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
      </div> -->
    </table>
					</form>
				</div>
				<div class="span8" style="float: right;;margin-top: -25px;margin-bottom: 10px">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="myaccount.php"> <i class="glyphicon glyphicon-edit	"></i> My Orders</a></li>
							<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
							<li><a href="checkout.php"><i class="glyphicon glyphicon-check	"></i> Checkout</a></li>					

							<li style="font-size: 15px"><a href="<?php session_start(); if(isset($_SESSION['Username'])) {echo "";} 
							else {echo 'register.php';} ?>">
							 <?php  ;if (isset($_SESSION['Username'])) {
								echo "<!DOCTYPE html>
							<html>
							<head>
							<meta name='viewport' content='width=device-width, initial-scale=1'>
							<style>
							.dropbtn {
								margin-bottom:-22px;
							    background-color: #FF7043;
							    color: white;
							    padding: 10px;
							    font-size: 15px;
							    border: none;
							    cursor: pointer;
							}

							.dropdown {
							    position: relative;
							    display: inline-block;
							}

							.dropdown-content {
							    display: none;
							    position: absolute;
							    right: 0;
							    background-color: #f9f9f9;
							    min-width: 160px;
							    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
							    z-index: 1;
							}

							.dropdown-content a {
							    color: black;
							    padding: 12px 16px;
							    text-decoration: none;
							    display: block;
							}

							.dropdown-content a:hover {background-color: #f1f1f1}

							.dropdown:hover .dropdown-content {
							    display: block;
							}

							.dropdown:hover .dropbtn {
							    background-color: grey;
							}
							</style>
							</head>
							<body>


							<div class='dropdown' style='float:right;'>
							  <button class='dropbtn'><i class='glyphicon glyphicon-user'></i> $_SESSION[Username]</button>
							  <div class='dropdown-content'>
							    <a href='logout.php'>Logout</a>
							  </div>
							</div>

							</body>
							</html>";
							}
							else{
								echo "<i class='glyphicon glyphicon-user'></i> Login|Register";
							} 
							?></a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="./products.php?page=mclothes">Clothing</a>					
								<ul>
									<li><a href="./products.php?page=mclothes">Men</a></li>									
									<li><a href="./products.php?page=wclothes">Women</a></li>
									<li><a href="./products.php?page=cclothes">Children</a></li>									
								</ul>
							</li>															
							<li><a href="./products.php?page=shoes">Shoes</a>
								<!-- <ul>
									<li><a href="./products.php?page=">Men</a></li>									
									<li><a href="./products.php?page=">Women</a></li>
									<li><a href="./products.php?page=">Children</a></li>									
								</ul> -->
							</li>						
							<li><a href="./products.php?page=Cosmetics">Cosmetics</a></li>
	
							<li><a href="./products.php?page=books">Books</a></li>

							<!-- <li><a href="./products.php?page=">Best Seller</a></li> -->
							<!-- <li><a href="./products.php?page=">Top Seller</a></li> -->
						</ul>
					</nav>
				</div>
			</section>
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/cod.jpg" alt="New products" >
				<h4><span>Check Out (Cash On Delivery)</span></h4>
			</section>	
			<section class="main-content">
				<!-- <div class="row">
					<div class="span12">
						<div class="accordion" id="accordion2">
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">Checkout Options</a>
								</div>
								<div id="collapseOne" class="accordion-body in collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span6">
				 -->								<!-- <h4>New Customer</h4>
												<p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
												<form action="#" method="post">
													<fieldset>
														<label class="radio" for="register">
															<input type="radio" name="account" value="register" id="register" checked="checked">Register Account
														</label>
														<label class="radio" for="guest">
															<input type="radio" name="account" value="guest" id="guest">Guest Checkout
														</label>
														<br>
														<button class="btn btn-inverse" data-toggle="collapse" data-parent="#collapse2">Continue</button>
													</fieldset>
												</form>
											 </div>
											 <div class="span6">
												<h4>Returning Customer</h4>
												<p>I am a returning customer</p>
												<form action="#" method="post">
													<fieldset>
														<div class="control-group">
															<label class="control-label">Username</label>
															<div class="controls">
																<input type="text" placeholder="Enter your username" id="username" class="input-xlarge">
															</div>
														</div>
														<div class="control-group">
															<label class="control-label">Password</label>
															<div class="controls">
															<input type="password" placeholder="Enter your password" id="password" class="input-xlarge">
															</div>
														</div>
														<button class="btn btn-inverse">Continue</button>
													</fieldset>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div> -->
				<form method="post" action="order.php" onsubmit="return alertsucc()">
				<div class="row">
					<div class="span12">
						<div class="accordion" id="accordion2">
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">Checkout Options</a>
								</div>
								<div id="collapseOne" class="accordion-body in collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span6">
												<h4>Your Personal Details</h4>
												<div class="control-group">
													<label class="control-label">* First Name</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge" name="fname" value="<?php  if(isset($info['fname'])){ echo $info['fname'];} ?>" required>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">* Last Name</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge" name="lname" value="<?php  if(isset($info['lname'])){ echo $info['lname'];} ?>" required >
													</div>
												</div>					  
												<div class="control-group">
													<label class="control-label">Email Address</label>
													<div class="controls">
														<input type="email" placeholder="" class="input-xlarge" name="email" value="<?php  if(isset($info['email'])){ echo $info['email'];} ?>" >
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">* Mobile</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge" name="mobile" value="<?php  if(isset($info['Mobile'])){ echo $info['Mobile'];} ?>" required>
													</div>
												</div>
												<!-- <div class="control-group">
													<label class="control-label">Fax</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge" name="">
													</div>
												</div> -->
											</div>
											<div class="span6">
												<h4>Your Address</h4>
												<div class="control-group">
													<label class="control-label">Company</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge " name="company" value="<?php  if(isset($info['company'])){ echo $info['company'];} ?>">
													</div>
												</div>
												<!-- <div class="control-group">
													<label class="control-label">Company ID:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div> -->					  
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Address 1:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge" name="address1" value="<?php  if(isset($info['address1'])){ echo $info['address1'];} ?>">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Address 2:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge" name="address2" value="<?php  if(isset($info['address2'])){ echo $info['address2'];} ?>">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> City:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge" name="city" value="<?php  if(isset($info['city'])){ echo $info['city'];} ?>">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Post Code:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge" name="postcode" value="<?php  if(isset($info['postcode'])){ echo $info['postcode'];} ?>">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Country:</label>
													<div class="controls">
														<select class="input-xlarge">
															<!-- <option value="1">America</option> -->
															<!-- <option value="2">Canada</option> -->
															<!-- <option value="3">Tanzania</option> -->
															<!-- <option value="4">China</option> -->
															<!-- <option value="5">Srilanka</option> -->
															<!-- <option value="6">Bangladesh</option> -->
															<option value="1">Pakistan</option>
															<!-- <option value="8">India</option> -->
															<!-- <option value="9">UAE</option> -->

														</select>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Region / State:</label>
													<div class="controls">
														<select name="zone_id" class="input-xlarge">
															<option value=""> --- Please Select --- </option>
															<option value="3513">Sindh</option>
															<option value="3514">Punjab</option>
															<option value="3515">Balochistan</option>
															<option value="3516">KPK</option>
															<option value="3517">Gilgit</option>
														</select>


													</div>
												</div>
												<input  type="submit" class="btn btn-inverse pull-center" value="Confirm order"  name="submit"></input>
												</form>
											</div>
										</div>

									</div>
								</div>

							</div>
							 <script>function alertsucc() {
							 	
							  alert("Successfully Ordered! Thank You");}</script>

							<!-- <div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">Confirm Order</a>
								</div>
								<div id="collapseThree" class="accordion-body collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="control-group">
												<label for="textarea" class="control-label">Comments</label>
												<div class="controls">
													<textarea rows="3" id="textarea" class="span12"></textarea>
												</div>
											</div>									
											<button class="btn btn-inverse pull-right">Confirm order</button>
										</div>
									</div>
								</div>
							</div>
						</div>				
					</div>
				</div> -->
			</section>			
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="./index.php">Homepage</a></li>  
							<li><a href="./about.html">About Us</a></li>
							<li><a href="./contact.html">Contac Us</a></li>
							<li><a href="./cart.php">Your Cart</a></li>
							<li><a href="./register.php">Login</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright 2013 bootstrappage template  All right reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
    </body>
</html>