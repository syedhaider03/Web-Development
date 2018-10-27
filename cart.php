<?php
session_start();
// if (isset($_POST['delete'])) {
// 	$cat=$arr['category'];
// 	$id=$arr['id'];
// 	unset($_SESSION[$cat][$id]);
// }
  ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Cart</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
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
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="themes/js/respond.min.js"></script>
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
			</section>			</section><section class="header_text sub">
			<img class="pageBanner" src="themes/images/Bannerpay.png" style="width: 100%;height: 200px" alt="New products" >
				<h4><span>Shopping Cart</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">
					<div class="span9">					
						<h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Remove</th>
									<th>Image</th>
									<th>Product Name</th>
									<th>Size</th>
									<th>Quantity</th>
									<th>Unit Price</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<form method="POST" action="<?php if(isset($_SESSION['Username'])){echo('checkout.php');} else {echo('register.php?page=checkout.php');} ?>">
								<tr>
									<?php  
										error_reporting(E_ALL ^ E_WARNING); 
													// header("Refresh:0");

									$total=0;
									$i=0;
									foreach ($_SESSION as $key => $value) {
										

									foreach ($value as $key2 => $value2) {
									
											if (isset($_POST["$key"])) {
										unset($_SESSION[$key][$key2]);
										break;

									?>
										<?php 

									}  ?>

									<td><input type="checkbox" value="delete" name="<?php echo $key?>"></td>
									<td><img style="width: 100px;height: 50px" alt="" src="<?php echo $value2['img']; ?>"></td>
									<td><?php echo $value2['name']; ?></td>

									<td><?php echo $value2['size']; ?></td>
									<td><input type="text" placeholder="<?php $qty=1; echo 1;?>"  class="input-mini" value="<?php if($value2['qty']<$qty) echo $qty; else echo $value2['qty']; ?>" disabled></td>
									<td><?php echo $value2['price']; ?></td>
									<td><?php $result=$value2['qty']*$value2['price']; echo "$result"; $total+=$result; ?></td>
								
								</tr>			  
								<?php 
										} }  ?>
								<!-- <tr>
									<td><input type="checkbox" value="option1"></td>
									<td><a href="product_detail.html"><img alt="" src="themes/images/ladies/1.jpg"></a></td>
									<td>Luctus quam ultrices rutrum</td>
									<td><input type="text" placeholder="2" class="input-mini"></td>
									<td>$1,150.00</td>
									<td>$2,450.00</td>
								</tr>
								<tr>
									<td><input type="checkbox" value="option1"></td>
									<td><a href="product_detail.html"><img alt="" src="themes/images/ladies/3.jpg"></a></td>
									<td>Wuam ultrices rutrum</td>
									<td><input type="text" placeholder="1" class="input-mini"></td>
									<td>$1,210.00</td>
									<td>$1,123.00</td>
								</tr> -->
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>

									<td><strong style="font-size: 15px"><?php echo "Rs. ".$total;  ?></strong></td>
								</tr>		  
							</tbody>
						</table>
						<!-- <h4>What would you like to do next?</h4>
						<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
						<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
							Use Coupon Code
						</label>
						<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
							Estimate Shipping &amp; Taxes
						</label>
						 --><hr>
						<p class="cart-total right">
							<strong>Sub-Total|</strong><?php echo " Rs. ".$total;  ?>	<br>
							<strong>GST (17%)|</strong>: <?php $tax=($total/100)*17; echo "Rs. ".$tax;  ?><br>
							<strong>Delivery Charges|</strong><?php $deli=150; if($total!=null){ echo " Rs. "."$deli";} else{ $deli =0; echo $deli;}   ?>	<br>

							<strong style="font-size: 20px">Total| Rs.</strong>:<span style="font-size:20px"><?php echo $total+$tax+$deli; ?></span><br>
						</p>
						<hr/>
						<p class="buttons center">				
							<button class="btn" type="submit">Update</button>
							<!-- <button class="btn" type="submit">Continue</button> -->
							<input  class="btn btn-inverse" type="submit" value="Checkout"></input>
						</p>		
						</form>			
					</div>
					<div class="span3 col">
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