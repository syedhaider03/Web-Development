	<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<title>Welcome to EStore</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta name="description" content="">
			<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
			<!-- bootstrap -->
			<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
			<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
			
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
		<section  class="homepage-slider" id="home-slider">
					<div class="flexslider" style="width: 100%;height: 300px">
						<ul class="slides">
							<?php 
						$servername = "localhost";
							$username = "root";
							$password = "";
							$dbname = "Estore";

							// Create connection
							$conn = mysqli_connect($servername, $username, $password, $dbname);
							// Check connection
							if (!$conn) {
							    die("Connection failed: " . mysqli_connect_error());
							}

							$sqli = "SELECT * FROM slider
							ORDER BY id DESC;";
							$resulti = mysqli_query($conn, $sqli);
							$i=1;

							if (mysqli_num_rows($resulti) > 0) {
							    // output data of each row
							    while($row = mysqli_fetch_assoc($resulti)) {
									$img  = "$row[image]";
							    	
							echo "<li>
								<img src='$img' alt='' />
								<center><div class=''>
									<h1 style='width: 100%''>One Shop Solution</h1>
								</div></center>
							</li>";        
							        
							    }
							} 
							else {
							    echo "0 results";
							}
													 ?>

							
							<!-- <li>
								<img src="themes/images/carousel/banner-1.jpg" alt="" />
								<center><div class="">
									<h1 style="width: 100%">One Shop Solution</h1>
								</div></center>
							</li> -->
							<li>
								<img src="themes/images/carousel/banner-2.jpg" alt="" />
								<center><div class="">
									<h1 style="width: 100%">One Shop Solution</h1>
								</div></center>
								<div class="intro">
									<h1>Mid season sale</h1>
									<p><span>Up to 50% Off</span></p>
									<p><span>On selected items online and in stores</span></p>
								</div>
							</li>
							
						
						</ul>
					</div>			
				</section>
				<section class="header_text">
					The Best Online Shopping Store Shop Now!
				</section>
				<section class="main-content">
					<!-- <div class="row">
						<div class="span12">													
							<div class="row">
								<div class="span12">
									<h4 class="title">
										<span class="pull-left"><span class="text"><span class="line">Feature <strong>Products</strong></span></span></span>
										<span class="pull-right">
											<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
										</span>
									</h4>
									<div id="myCarousel" class="myCarousel carousel slide">
										<div class="carousel-inner">
											<div class="active item">
												<ul class="thumbnails">												
													<li class="span3">
														<div class="product-box">
															<span class="sale_tag"></span>
															<p><a href="product_detail.php?edit=$id1"><img src="themes/images/ladies/1.jpg" alt="" /></a></p>
															<a href="product_detail.php?edit=$id1" class="title">Ut wisi enim ad</a><br/>
															<a href="products.php?page=" class="category">Commodo consequat</a>
															<p class="price">$17.25</p>
														</div>
													</li>
													<li class="span3">
														<div class="product-box">
															<span class="sale_tag"></span>
															<p><a href="product_detail.php?edit=$id1"><img src="themes/images/ladies/2.jpg" alt="" /></a></p>
															<a href="product_detail.php?edit=$id1" class="title">Quis nostrud exerci tation</a><br/>
															<a href="products.php?page=" class="category">Quis nostrud</a>
															<p class="price">$32.50</p>
														</div>
													</li>
													<li class="span3">
														<div class="product-box">
															<p><a href="product_detail.php?edit=$id1"><img src="themes/images/ladies/3.jpg" alt="" /></a></p>
															<a href="product_detail.php?edit=$id1" class="title">Know exactly turned</a><br/>
															<a href="products.php?page=" class="category">Quis nostrud</a>
															<p class="price">$14.20</p>
														</div>
													</li>
													<li class="span3">
														<div class="product-box">
															<p><a href="product_detail.php?edit=$id1"><img src="themes/images/ladies/4.jpg" alt="" /></a></p>
															<a href="product_detail.php?edit=$id1" class="title">You think fast</a><br/>
															<a href="products.php?page=" class="category">World once</a>
															<p class="price">$31.45</p>
														</div>
													</li>
												</ul>
											</div>
											<div class="item">
												<ul class="thumbnails">
													<li class="span3">
														<div class="product-box">
															<p><a href="product_detail.php?edit=$id1"><img src="themes/images/ladies/5.jpg" alt="" /></a></p>
															<a href="product_detail.php?edit=$id1" class="title">Know exactly</a><br/>
															<a href="products.php?page=" class="category">Quis nostrud</a>
															<p class="price">$22.30</p>
														</div>
													</li>
													<li class="span3">
														<div class="product-box">
															<p><a href="product_detail.php?edit=$id1"><img src="themes/images/ladies/6.jpg" alt="" /></a></p>
															<a href="product_detail.php?edit=$id1" class="title">Ut wisi enim ad</a><br/>
															<a href="products.php?page=" class="category">Commodo consequat</a>
															<p class="price">$40.25</p>
														</div>
													</li>
													<li class="span3">
														<div class="product-box">
															<p><a href="product_detail.php?edit=$id1"><img src="themes/images/ladies/7.jpg" alt="" /></a></p>
															<a href="product_detail.php?edit=$id1" class="title">You think water</a><br/>
															<a href="products.php?page=" class="category">World once</a>
															<p class="price">$10.45</p>
														</div>
													</li>
													<li class="span3">
														<div class="product-box">
															<p><a href="product_detail.php?edit=$id1"><img src="themes/images/ladies/8.jpg" alt="" /></a></p>
															<a href="product_detail.php?edit=$id1" class="title">Quis nostrud exerci</a><br/>
															<a href="products.php?page=" class="category">Quis nostrud</a>
															<p class="price">$35.50</p>
														</div>
													</li>																																	
												</ul>
											</div>
										</div>							
									</div>
								</div>						
							</div>
					 -->		<br/>
							<div class="row">
								<div class="span12">
									<h4 class="title">
										<span class="pull-left"><span class="text"><span class="line">Latest <strong>Books</strong></span></span></span>
										<span class="pull-right">
											<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
										</span>
									</h4>
									<div id="myCarousel-2" class="myCarousel carousel slide">
										<div class="carousel-inner">
											<div class="active item">
												<ul class="thumbnails">												
													<li class="span3">
	<?php 
	// $servername = "localhost";
	// $username = "root";
	// $password = "";
	// $dbname = "Estore";

	// // Create connection
	// $conn = mysqli_connect($servername, $username, $password, $dbname);
	// // Check connection
	// if (!$conn) {
	//     die("Connection failed: " . mysqli_connect_error());
	// }

	$sql = "SELECT * FROM books
	ORDER BY id DESC;";
	$result = mysqli_query($conn, $sql);
	$i=1;
	// ${"check" . $counter} = "some value";
	// ${"img" . $i} = "some value";

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        // echo "image: " . "<img src='$row[image]'>". " - Name: " . $row["name"]. " " . $row["writer"].$row["price"]. "<br>";
	${"id" . "$i"} = "$row[id]";
	${"img" . "$i"} = "$row[image]";
	${"name" . "$i"} = "$row[name]";
	${"writer" . "$i"} = "$row[writer]";
	${"price" . "$i"} = "$row[price]";
	    	
	    	// echo ${"img" . $i};
	        
	        if($i==8){break;}
	        else
	        	        $i++;

	    }
	} else {
	    echo "0 results";
	}
	    	// echo ${"img" . 1};
	// echo "$img9";



	?>
	<!-- <style type="text/css">
		.sale_tag{
			width: 300px;
			height: 450px
		}
	</style> -->
														<div class="product-box">
															<span class="sale_tag"></span>
															<p><a href="product_detail.php?edit=<?php echo $id1 ?>&type=books" ><img style="width: 300px;height: 300px" src="<?php echo $img1?>"  alt="" /></a></p>
															<a href="product_detail.php?edit=<?php echo $id1 ?>&type=books" class="title"><?php echo $name1?></a><br/>
															<a href="products.php?page=" class="category"><?php echo $writer1?></a>
															<p class="price">Rs. <?php echo $price1?></p>
														</div>

													</li>
													<li class="span3">
														<div class="product-box">
															<p><a href="product_detail.php?edit=<?php echo $id2 ?>&type=books"><img style="width: 300px;height: 300px" src="<?php echo $img2?>" alt="" /></a></p>
															<a href="product_detail.php?edit=<?php echo $id2 ?>&type=books" class="title"><?php echo $name2?></a><br/>
															<a href="products.php?page=" class="category"><?php echo $writer2?></a>
															<p class="price">Rs. <?php echo $price2?></p>
														</div>
													</li>
													<li class="span3">
														<div class="product-box">
															<p><a href="product_detail.php?edit=<?php echo $id3 ?>&type=books"><img style="width: 300px;height: 300px" src="<?php echo $img3?>" alt="" /></a></p>
															<a href="product_detail.php?edit=<?php echo $id3 ?>&type=books" class="title"><?php echo $name3?></a><br/>
															<a href="products.php?page=" class="category"><?php echo $writer3?></a>
															<p class="price">Rs. <?php echo $price3?></p>
														</div>
													</li>
													<li class="span3">
														<div class="product-box">
															<p><a href="product_detail.php?edit=<?php echo $id4 ?>&type=books"><img style="width: 300px;height: 300px" src="<?php echo $img4?>" alt="" /></a></p> 
															<a href="product_detail.php?edit=<?php echo $id4 ?>&type=books" class="title"><?php echo $name4?></a><br/>
															<a href="products.php?page=" class="category"><?php echo $writer4?></a>
															<p class="price">Rs. <?php echo $price4?></p>
														</div>
													</li>
												</ul>
											</div>
											<div class="item">
												<ul class="thumbnails">
													<li class="span3">
														<div class="product-box">
															<p><a href="product_detail.php?edit=<?php echo $id5 ?>&type=books"><img style="width: 300px;height: 300px" src="<?php echo $img5?>" alt="" /></a></p>
															<a href="product_detail.php?edit=<?php echo $id5 ?>&type=books" class="title"><?php echo $name5?></a><br/>
															<a href="products.php?page=" class="category"><?php echo $writer5?></a>
															<p class="price">Rs. <?php echo $price5?></p>
														</div>
													</li>
													<li class="span3">
														<div class="product-box">
															<p><a href="product_detail.php?edit=<?php echo $id6 ?>&type=books"><img style="width: 300px;height: 300px" src="<?php echo $img6?>" alt="" /></a></p>
															<a href="product_detail.php?edit=<?php echo $id6 ?>&type=books" class="title"><?php echo $name6?></a><br/>
															<a href="products.php?page=" class="category"><?php echo $writer6?></a>
															<p class="price">Rs. <?php echo $price6?></p>
														</div>
													</li>
													<li class="span3">
														<div class="product-box">
															<p><a href="product_detail.php?edit=<?php echo $id7 ?>&type=books"><img style="width: 300px;height: 300px" src="<?php echo $img7?>" alt="" /></a></p>
															<a href="product_detail.php?edit=<?php echo $id7 ?>&type=books" class="title"><?php echo $name7?></a><br/>
															<a href="products.php?page=" class="category"><?php echo $writer7?></a>
															<p class="price">Rs. <?php echo $price7?></p>
														</div>
													</li>
													<li class="span3">
														<div class="product-box">
															<p><a href="product_detail.php?edit=<?php echo $id8 ?>&type=books"><img style="width: 300px;height: 300px" src="<?php echo $img8?>" alt="" /></a></p>
															<a href="product_detail.php?edit=<?php echo $id8 ?>&type=books" class="title"><?php echo $name8?></a><br/>
															<a href="products.php?page=" class="category"><?php echo $writer8?></a>
															<p class="price">Rs. <?php echo $price8?></p>
														</div>
													</li>																																	
												</ul>
											</div>
										</div>							
									</div>
								</div>						
							</div>
							<?php
							if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM Cosmetics
	ORDER BY id DESC;";
	$result = mysqli_query($conn, $sql);
	$i=1;
	// ${"check" . $counter} = "some value";
	// ${"img" . $i} = "some value";

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        // echo "image: " . "<img src='$row[image]'>". " - Name: " . $row["name"]. " " . $row["writer"].$row["price"]. "<br>";
	${"cid" . "$i"} = "$row[id]";
	${"cimg" . "$i"} = "$row[image]";
	${"cname" . "$i"} = "$row[brand]";
	${"cwriter" . "$i"} = "$row[details]";
	${"cprice" . "$i"} = "$row[price]";
	    	
	    	// echo ${"img" . $i};
	        
	        if($i==8){break;}
	        else
	        	        $i++;

	    }
	} else {
	    echo "0 results";
	}
	?>
							<div class="row">

							<div class="span12">
									<h4 class="title">
										<span class="pull-left"><span class="text"><span class="line">Latest <strong>Cosmetics</strong></span></span></span>
										<span class="pull-right">
											<a class="left button" href="#myCarousel-3" data-slide="prev"></a><a class="right button" href="#myCarousel-3" data-slide="next"></a>
										</span>
									</h4>
									<div id="myCarousel-3" class="myCarousel carousel slide">
										<div class="carousel-inner">
											<div class="active item">
												<ul class="thumbnails">												
													<li class="span3">
														<div class="product-box">
															<span class="sale_tag"></span>
															<p><a href="product_detail.php?edit=<?php echo $cid1 ?>&type=Cosmetics"><img style="width: 300px;height: 250px" src="<?php echo $cimg1?>" alt="" /></a></p>
															<a href="product_detail.php?edit=<?php echo $cid1 ?>&type=Cosmetics" class="title"><?php echo $cname1?></a><br/>
															<a href="products.php?page=" class="category"><?php echo $cwriter1?></a>
															<p class="price">Rs. <?php echo $cprice1?></p>
														</div>
													</li>
													<li class="span3">
														<div class="product-box">
															<p><a href="product_detail.php?edit=<?php echo $cid2 ?>&type=Cosmetics"><img style="width: 300px;height: 250px" src="<?php echo $cimg2?>" alt="" /></a></p>
															<a href="product_detail.php?edit=<?php echo $cid2 ?>&type=Cosmetics" class="title"><?php echo $cname2?></a><br/>
															<a href="products.php?page=" class="category"><?php echo $cwriter2?></a>
															<p class="price">Rs. <?php echo $cprice2?></p>
														</div>
													</li>
													<li class="span3">
														<div class="product-box"><p><a href="product_detail.php?edit=<?php echo $cid3 ?>&type=Cosmetics"><img style="width: 300px;height: 250px" src="<?php echo $cimg3?>" alt="" /></a></p>
															<a href="product_detail.php?edit=<?php echo $cid3 ?>&type=Cosmetics" class="title"><?php echo $cname3?></a><br/>
															<a href="products.php?page=" class="category"><?php echo $cwriter3?></a>
															<p class="price">Rs. <?php echo $cprice3?></p>
														</div>
													</li>
													<li class="span3">
														<div class="product-box">
															<p><a href="product_detail.php?edit=<?php echo $cid4 ?>&type=Cosmetics"><img style="width: 300px;height: 250px" src="<?php echo $cimg4?>" alt="" /></a></p>
															<a href="product_detail.php?edit=<?php echo $cid4 ?>&type=Cosmetics" class="title"><?php echo $cname4?></a><br/>
															<a href="products.php?page=" class="category"><?php echo $cwriter4?></a>
															<p class="price">Rs. <?php echo $cprice4?></p>
														</div>
													</li>
												</ul>
											</div>
											<div class="item">
												<ul class="thumbnails">
													<li class="span3">
														<div class="product-box">
															<p><a href="product_detail.php?edit=<?php echo $cid5 ?>&type=Cosmetics"><img style="width: 300px;height: 250px" src="<?php echo $cimg5?>" alt="" /></a></p>
															<a href="product_detail.php?edit=<?php echo $cid5 ?>&type=Cosmetics" class="title"><?php echo $cname5?></a><br/>
															<a href="products.php?page=" class="category"><?php echo $cwriter5?></a>
															<p class="price">Rs. <?php echo $cprice5?></p>
														</div>
													</li>
													<li class="span3">
														<div class="product-box">
															<p><a href="product_detail.php?edit=<?php echo $cid6 ?>&type=Cosmetics"><img style="width: 300px;height: 250px" src="<?php echo $cimg6?>" alt="" /></a></p>
															<a href="product_detail.php?edit=<?php echo $cid6 ?>&type=Cosmetics" class="title"><?php echo $cname6?></a><br/>
															<a href="products.php?page=" class="category"><?php echo $cwriter6?></a>
															<p class="price">Rs. <?php echo $cprice6?></p>
														</div>
													</li>
													<li class="span3">
														<div class="product-box">
															<p><a href="product_detail.php?edit=$<?php echo $cid7 ?>&type=Cosmetics"><img style="width: 300px;height: 250px" src="<?php echo $cimg7?>" alt="" /></a></p>
															<a href="product_detail.php?edit=<?php echo $cid7 ?>&type=Cosmetics" class="title"><?php echo $cname7?></a><br/>
															<a href="products.php?page=" class="category"><?php echo $cwriter7?></a>
															<p class="price">Rs. <?php echo $cprice7?></p>
														</div>
													</li>
													<li class="span3">
														<div class="product-box">
															<p><a href="product_detail.php?edit=<?php echo $cid8 ?>&type=Cosmetics"><img style="width: 300px;height: 250px" src="<?php echo $cimg8?>" alt="" /></a></p>
															<a href="product_detail.php?edit=<?php echo $cid8 ?>&type=Cosmetics" class="title"><?php echo $cname8?></a><br/>
															<a href="products.php?page=" class="category"><?php echo $cwriter8?></a>
															<p class="price">Rs. <?php echo $cprice8?></p>
														</div>
													</li>																																	
												</ul>
											</div>
										</div>							
									</div>
								</div>						
							</div>

							<?php
							if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM mclothes
	ORDER BY id DESC;";

	$sql2 = "SELECT * FROM wclothes
	ORDER BY id DESC;";

	$sql3 = "SELECT * FROM cclothes
	ORDER BY id DESC;";
	$result = mysqli_query($conn, $sql);
	$i=1;
	// ${"check" . $counter} = "some value";
	// ${"img" . $i} = "some value";

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        // echo "image: " . "<img src='$row[image]'>". " - Name: " . $row["name"]. " " . $row["writer"].$row["price"]. "<br>";
	${"mid" . "$i"} = "$row[id]";
	${"mimg" . "$i"} = "$row[image]";
	${"mname" . "$i"} = "$row[brand]";
	${"mwriter" . "$i"} = "$row[details]";
	${"mprice" . "$i"} = "$row[price]";
	    	
	    	// echo ${"img" . $i};
	        
	        if($i==3){break;}
	        else
	        	        $i++;

	    }}
	 $result = mysqli_query($conn, $sql2);
	$i=1;
	// ${"check" . $counter} = "some value";
	// ${"img" . $i} = "some value";

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        // echo "image: " . "<img src='$row[image]'>". " - Name: " . $row["name"]. " " . $row["writer"].$row["price"]. "<br>";
	${"wid" . "$i"} = "$row[id]";
	${"wimg" . "$i"} = "$row[image]";
	${"wname" . "$i"} = "$row[brand]";
	${"wwriter" . "$i"} = "$row[details]";
	${"wprice" . "$i"} = "$row[price]";
	    	
	    	// echo ${"img" . $i};
	        
	        if($i==3){break;}
	        else
	        	        $i++;

	    }}

	 $result = mysqli_query($conn, $sql3);
	$i=1;
	// ${"check" . $counter} = "some value";
	// ${"img" . $i} = "some value";

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        // echo "image: " . "<img src='$row[image]'>". " - Name: " . $row["name"]. " " . $row["writer"].$row["price"]. "<br>";
	${"cid" . "$i"} = "$row[id]";
	${"cimg" . "$i"} = "$row[image]";
	${"cname" . "$i"} = "$row[brand]";
	${"cwriter" . "$i"} = "$row[details]";
	${"cprice" . "$i"} = "$row[price]";
	    	
	    	// echo ${"img" . $i};
	        
	        if($i==3){break;}
	        else
	        	        $i++;

	    }
	} else {
	    echo "0 results";
	}
	?>
							<div class="row">

							<div class="span12">
									<h4 class="title">
										<span class="pull-left"><span class="text"><span class="line">Latest <strong>Clothes</strong></span></span></span>
										<span class="pull-right">
											<a class="left button" href="#myCarousel-4" data-slide="prev"></a><a class="right button" href="#myCarousel-4" data-slide="next"></a>
										</span>
									</h4>
									<div id="myCarousel-4" class="myCarousel carousel slide">
										<div class="carousel-inner">
											<div class="active item">
												<ul class="thumbnails">												
													<li class="span3">
														<div class="product-box">
															<span class="sale_tag"></span>
															<p><a href="product_detail.php?edit=<?php echo $mid1 ?>&type=mclothes"><img style="width: 300px;height: 250px" src="<?php echo $mimg1?>" alt="" /></a></p>
															<a href="product_detail.php?edit=<?php echo $mid1 ?>&type=mclothes" class="title"><?php echo $mname1?></a><br/>
															<a href="products.php?page=" class="category"><?php echo $mwriter1?></a>
															<p class="price">Rs. <?php echo $mprice1?></p>
														</div>
													</li>
													<li class="span3">
														<div class="product-box">
															
															<p><a href="product_detail.php?edit=<?php echo $wid1 ?>&type=wclothes"><img style="width: 300px;height: 250px" src="<?php echo $wimg1?>" alt="" /></a></p>
															<a href="product_detail.php?edit=<?php echo $wid1 ?>&type=wclothes" class="title"><?php echo $wname1?></a><br/>
															<a href="products.php?page=" class="category"><?php echo $wwriter1?></a>
															<p class="price">Rs. <?php echo $wprice1?></p>
														</div>
													</li>
													<li class="span3">
														<div class="product-box">

															<p><a href="product_detail.php?edit=<?php echo $mid2 ?>&type=mclothes"><img style="width: 300px;height: 250px" src="<?php echo $mimg2?>" alt="" /></a></p>
															<a href="product_detail.php?edit=<?php echo $mid2 ?>&type=mclothes" class="title"><?php echo $mname2?></a><br/>
															<a href="products.php?page=" class="category"><?php echo $mwriter2?></a>
															<p class="price">Rs. <?php echo $mprice2?></p>
														</div>
													</li>
													<li class="span3">
														<div class="product-box">

															<p><a href="product_detail.php?edit=<?php echo $wid2 ?>&type=wclothes"><img style="width: 300px;height: 250px" src="<?php echo $wimg2?>" alt="" /></a></p>
															<a href="product_detail.php?edit=<?php echo $wid2 ?>&type=wclothes" class="title"><?php echo $wname2?></a><br/>
															<a href="products.php?page=" class="category"><?php echo $wwriter2?></a>
															<p class="price">Rs. <?php echo $wprice2?></p>
														</div>
													</li>
												</ul>
											</div>
											<div class="item">
												<ul class="thumbnails">
													<li class="span3">
														<div class="product-box">

															<p><a href="product_detail.php?edit=<?php echo $cid1 ?>&type=cclothes"><img style="width: 300px;height: 250px" src="<?php echo $cimg1?>" alt="" /></a></p>
															<a href="product_detail.php?edit=$<?php echo $cid1 ?>&type=cclothes" class="title"><?php echo $cname1?></a><br/>
															<a href="products.php?page=" class="category"><?php echo $cwriter1?></a>
															<p class="price">Rs. <?php echo $cprice1?></p>
														</div>
													</li>
													<li class="span3">
														<div class="product-box">

															<p><a href="product_detail.php?edit=<?php echo $mid3 ?>&type=mclothes"><img style="width: 300px;height: 250px" src="<?php echo $mimg3?>" alt="" /></a></p>
															<a href="product_detail.php?edit=<?php echo $mid3 ?>&type=mclothes" class="title"><?php echo $mname3?></a><br/>
															<a href="products.php?page=" class="category"><?php echo $mwriter3?></a>
															<p class="price">Rs. <?php echo $mprice3?></p>
														</div>
													</li>
													<li class="span3">
														<div class="product-box">

															<p><a href="product_detail.php?edit=<?php echo $wid3 ?>&type=wclothes"><img style="width: 300px;height: 250px" src="<?php echo $wimg3?>" alt="" /></a></p>
															<a href="product_detail.php?edit=<?php echo $wid3 ?>&type=wclothes" class="title"><?php echo $wname3?></a><br/>
															<a href="products.php?page=" class="category"><?php echo $wwriter3?></a>
															<p class="price">Rs. <?php echo $wprice3?></p>
														</div>
													</li>
													<li class="span3">
														<div class="product-box">

															<p><a href="product_detail.php?edit=$<?php echo $cid2 ?>&type=cclothes"><img style="width: 300px;height: 250px" src="<?php echo $cimg2?>" alt="" /></a></p>
															<a href="product_detail.php?edit=<?php echo $mid1 ?>&type=cclothes" class="title"><?php echo $cname2?></a><br/>
															<a href="products.php?page=" class="category"><?php echo $cwriter2?></a>
															<p class="price">Rs. <?php echo $cprice2?></p>
														</div>
													</li>																																	
												</ul>
											</div>
										</div>							
									</div>
								</div>						
							</div>
							<div class="span12">
									<h4 class="title">
										<span class="pull-left"><span class="text"><span class="line">Latest <strong>Shoes</strong></span></span></span>
										<span class="pull-right">
											<a class="left button" href="#myCarousel-5" data-slide="prev"></a><a class="right button" href="#myCarousel-5" data-slide="next"></a>
										</span>

									</h4>
	<?php								
	$sql = "SELECT * FROM shoes
	ORDER BY id DESC;";
	$result = mysqli_query($conn, $sql);
	$i=1;
	// ${"check" . $counter} = "some value";
	// ${"img" . $i} = "some value";

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        // echo "image: " . "<img src='$row[image]'>". " - Name: " . $row["name"]. " " . $row["writer"].$row["price"]. "<br>";
	${"sid" . "$i"} = "$row[id]";
	${"simg" . "$i"} = "$row[image]";
	${"sname" . "$i"} = "$row[brand]";
	${"swriter" . "$i"} = "$row[details]";
	${"sprice" . "$i"} = "$row[price]";
	    	
	    	// echo ${"img" . $i};
	        
	        if($i==8){break;}
	        else
	        	        $i++;

	    }
	} else {
	    echo "0 results";
	}
	?>
									<div id="myCarousel-5" class="myCarousel carousel slide">
										<div class="carousel-inner">
											<div class="active item">
												<ul class="thumbnails">												
													<li class="span3">
														<div class="product-box">
															<span class="sale_tag"></span>
															<p><a href="product_detail.php?edit=<?php echo $sid1 ?>&type=shoes"><img style="width: 300px;height: 250px" src="<?php echo $simg1?>" alt="" /></a></p>
															<a href="product_detail.php?edit=<?php echo $sid1 ?>&type=shoes" class="title"><?php echo $sname1?></a><br/>
															<a href="products.php?page=" class="category"><?php echo $swriter1?></a>
															<p class="price">Rs. <?php echo $sprice1?></p>
														</div>
													</li>
													<li class="span3">
														<div class="product-box">
															<p><a href="product_detail.php?edit=<?php echo $sid2 ?>&type=shoes"><img style="width: 300px;height: 250px" src="<?php echo $simg2?>" alt="" /></a></p>
															<a href="product_detail.php?edit=<?php echo $sid2 ?>&type=shoes" class="title"><?php echo $sname2?></a><br/>
															<a href="products.php?page=" class="category"><?php echo $swriter2?></a>
															<p class="price">Rs. <?php echo $sprice2?></p>
														</div>
													</li>
													<li class="span3">
														<div class="product-box">
															<p><a href="product_detail.php?edit=<?php echo $sid3 ?>&type=shoes"><img style="width: 300px;height: 250px" src="<?php echo $simg3?>" alt="" /></a></p>
															<a href="product_detail.php?edit=<?php echo $sid3 ?>&type=shoes" class="title"><?php echo $sname3?></a><br/>
															<a href="products.php?page=" class="category"><?php echo $swriter3?></a>
															<p class="price">Rs. <?php echo $sprice3?></p>
														</div>
													</li>
													<li class="span3">
														<div class="product-box">
															<p><a href="product_detail.php?edit=<?php echo $sid4 ?>&type=shoes"><img style="width: 300px;height: 250px" src="<?php echo $simg4?>" alt="" /></a></p>
															<a href="product_detail.php?edit=<?php echo $sid4 ?>&type=shoes" class="title"><?php echo $sname4?></a><br/>
															<a href="products.php?page=" class="category"><?php echo $swriter4?></a>
															<p class="price">Rs. <?php echo $sprice4?></p>
														</div>
													</li>
												</ul>
											</div>
											<div class="item">
												<ul class="thumbnails">
													<li class="span3">
														<div class="product-box">
															<p><a href="product_detail.php?edit=<?php echo $sid5 ?>&type=shoes"><img style="width: 300px;height: 250px" src="<?php echo $simg5?>" alt="" /></a></p>
															<a href="product_detail.php?edit=<?php echo $sid5 ?>&type=shoes" class="title"><?php echo $sname5?></a><br/>
															<a href="products.php?page=" class="category"><?php echo $swriter5?></a>
															<p class="price">Rs. <?php echo $sprice5?></p>
														</div>
													</li>
													<li class="span3">
														<div class="product-box">
															<p><a href="product_detail.php?edit=<?php echo $sid6 ?>&type=shoes"><img style="width: 300px;height: 250px" src="<?php echo $simg6?>" alt="" /></a></p>
															<a href="product_detail.php?edit=<?php echo $sid6 ?>&type=shoes" class="title"><?php echo $sname6?></a><br/>
															<a href="products.php?page=" class="category"><?php echo $swriter6?></a>
															<p class="price">Rs. <?php echo $sprice6?></p>
														</div>
													</li>
													<li class="span3">
														<div class="product-box">
															<p><a href="product_detail.php?edit=<?php echo $sid7 ?>&type=shoes"><img style="width: 300px;height: 250px" src="<?php echo $simg7?>" alt="" /></a></p>
															<a href="product_detail.php?edit=<?php echo $sid7 ?>&type=shoes" class="title"><?php echo $sname7?></a><br/>
															<a href="products.php?page=" class="category"><?php echo $swriter7?></a>
															<p class="price">Rs. <?php echo $sprice7?></p>
														</div>
													</li>
													<li class="span3">
														<div class="product-box">
															<p><a href="product_detail.php?edit=<?php echo $sid8 ?>&type=shoes"><img style="width: 300px;height: 250px" src="<?php echo $simg8?>" alt="" /></a></p>
															<a href="product_detail.php?edit=<?php echo $sid8 ?>&type=shoes" class="title"><?php echo $sname8?></a><br/>
															<a href="products.php?page=" class="category"><?php echo $swriter8?></a>
															<p class="price">Rs. <?php echo $sprice8?></p>
														</div>
													</li>																																	
												</ul>
											</div>
										</div>							
									</div>
								</div>						
							</div>
							<div class="row feature_box">						
								<div class="span4">
									<div class="service">
										<div class="responsive">	
											<img src="themes/images/feature_img_2.png" alt="" />
											<h4>MODERN <strong>DESIGN</strong></h4>
											<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>									
										</div>
									</div>
								</div>
								<div class="span4">	
									<div class="service">
										<div class="customize">			
											<img src="themes/images/feature_img_1.png" alt="" />
											<h4>FREE <strong>SHIPPING</strong></h4>
											<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
										</div>
									</div>
								</div>
								<div class="span4">
									<div class="service">
										<div class="support">	
											<img src="themes/images/feature_img_3.png" alt="" />
											<h4>24/7 LIVE <strong>SUPPORT</strong></h4>
											<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
										</div>
									</div>
								</div>	
							</div>		
						</div>				
					</div>
				</section>
				<section class="our_client">
					<h4 class="title"><span class="text">Manufactures</span></h4>
					<div class="row">					
						<div class="span2">
							<a href="#"><img alt="" src="themes/images/clients/14.png"></a>
						</div>
						<div class="span2">
							<a href="#"><img alt="" src="themes/images/clients/35.png"></a>
						</div>
						<div class="span2">
							<a href="#"><img alt="" src="themes/images/clients/1.png"></a>
						</div>
						<div class="span2">
							<a href="#"><img alt="" src="themes/images/clients/2.png"></a>
						</div>
						<div class="span2">
							<a href="#"><img alt="" src="themes/images/clients/3.png"></a>
						</div>
						<div class="span2">
							<a href="#"><img alt="" src="themes/images/clients/4.png"></a>
						</div>
					</div>
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
			<script src="themes/js/jquery.flexslider-min.js"></script>
			<script type="text/javascript">
				$(function() {
					$(document).ready(function() {
						$('.flexslider').flexslider({
							animation: "fade",
							slideshowSpeed: 4000,
							animationSpeed: 600,
							controlNav: false,
							directionNav: true,
							controlsContainer: ".flex-container" // the container that holds the flexslider
						});
					});
				});
			</script>
	    </body>
	</html>
	<?php mysqli_close($conn);  ?>