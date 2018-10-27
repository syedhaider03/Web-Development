<?php 
session_start(); 
if(!isset($_SESSION['Username']))
{
header("location:register.php");
}
	?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>My Orders</title>
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

							<li style="font-size: 15px"><a href="<?php  if(isset($_SESSION['Username'])) {echo "";} 
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
			<img class="pageBanner" src="themes/images/ordert.jpg" alt="New products" >
				<h4><span>Track Your Orders</span></h4>
			</section>	
			<section class="main-content" >				
				<div class="row" >
					<div class="span9">					
						<h4 class="title"><span class="text"><strong>Your</strong> Orders</span></h4>
							<?php 
							$servername = "localhost";
							$username = "root";
							$password = "";
							$dbname = "Euser";

							// Create connection
							$conn = mysqli_connect($servername, $username, $password, $dbname);
							// Check connection
							if (!$conn) {
							    die("Connection failed: " . mysqli_connect_error());
							}
							$sql = "SELECT * FROM `orders` WHERE `Username`='$_SESSION[Username]';";
							// echo "$sql";
							$result = mysqli_query($conn, $sql);
							if (mysqli_num_rows($result) > 0) {
								echo "
									<!DOCTYPE html>
									<html>
									<head>
										<title></title>
									</head>
									<body>
									<style type='text/css'>
									#customers {
									    font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;
									    border-collapse: collapse;
									    width: 100%;
									}

									#customers td, #customers th {
									    border: 1px solid #ddd;
									    padding: 8px;
									    text-align:center;
									}

									#customers tr:nth-child(even){background-color:#E1F5FE;text-align:center;}

									#customers tr:hover {background-color: #ddd;}

									#customers th {
									    padding-top: 12px;
									    padding-bottom: 12px;
									    text-align: left;
									    background-color: #03A9F4;
									    color: white;
									    text-align:center;
									}
									</style>
									</head>
									<body>

									<table id='customers'>
									  <tr>
									<th>Order Date And Time</th>
									<th>Product Name</th>
									<th>Size</th>
									<th>Quantity</th>
									<th>Total</th>
									  </tr>
									
									";
							    // output data of each row
								$total=0;

							    while($row = mysqli_fetch_assoc($result)) {
							    	$date=$row["Date&time"];
							    	echo "
							    	<tr>
							    		<td>$date</td>
									    <td>$row[Product_Name]</td>
									    <td>$row[Size]</td>
									    <td>$row[qty]</td>
									    <td>Rs. $row[Total]</td>
									</tr>
									  
							    	";
							    	$total=$total+$row["Total"];
							    	// echo "$total ";
							    	
										}
										echo "		
										<tr>
										<td>&nbsp</td>
									    <td>&nbsp</td>
									    <td>&nbsp</td>
									   	<td>&nbsp</td>
									    <td>Rs. $total/=</td>
									</tr>
																

										</table>




									</body>
									</html>";
									}
							 ?>
							 <p style="margin-left: 10px;font-weight: bold;font-style: italic;">All Product Will Delivered to you Within 4-5 Working Days</p>
					</div>
					<div class="span3 col" style="margin-top: 20%">
						<div class="block">	
							<ul class="nav nav-list">
								<li class="nav-header">SUB CATEGORIES</li>
								<li><a class="active" href="products.html">Clothing</a></li>
								<li ><a href="products.html">Men</a></li>
								<li><a href="products.html">Women</a></li>
								<li><a href="products.html">Shoes</a></li>
<!-- 								<li><a href="products.html">Phasellus ultricies</a></li>
								<li><a href="products.html">Donec laoreet dui</a></li> -->
							</ul>
							<br/>
							<ul class="nav nav-list below">
								<li class="nav-header">MANUFACTURES</li>
								<li><a href="products.html">Adidas</a></li>
								<li><a href="products.html">Nike</a></li>
								<li><a href="products.html">Dunlop</a></li>
								<li><a href="products.html">Yamaha</a></li>
							</ul>
						</div>
						<!-- <div class="block">
							<h4 class="title">
								<span class="pull-left"><span class="text">Randomize</span></span>
								<span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
							</h4>
							<div id="myCarousel" class="carousel slide">
								<div class="carousel-inner">
									<div class="active item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">
													<span class="sale_tag"></span>												
													<a href="product_detail.html"><img alt="" src="themes/images/ladies/2.jpg"></a><br/>
													<a href="product_detail.html" class="title">Fusce id molestie massa</a><br/>
													<a href="#" class="category">Suspendisse aliquet</a>
													<p class="price">$261</p>
												</div>
											</li>
										</ul>
									</div>
									<div class="item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">												
													<a href="product_detail.html"><img alt="" src="themes/images/ladies/4.jpg"></a><br/>
													<a href="product_detail.html" class="title">Tempor sem sodales</a><br/>
													<a href="#" class="category">Urna nec lectus mollis</a>
													<p class="price">$134</p>
												</div>
											</li>
										</ul>
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
							<li><a href="./register.html">Login</a></li>							
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
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "register.php";})
			});

		</script>		
    </body>
</html>