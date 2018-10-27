<?php 
if (isset($_GET['edit'])) {
	# code...

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
// echo "$_GET[type]";
// echo "$_GET[edit]";
$sql = "SELECT * FROM $_GET[type] WHERE id=$_GET[edit];";

$result = mysqli_query($conn, $sql);
// $i=1;
// ${"check" . $counter} = "some value";
// ${"img" . $i} = "some value";
// echo "$result";
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        // echo "image: " . "<img src='$row[image]'>". " - Name: " . $row["name"]. " " . $row["writer"].$row["price"]. "<br>";
// ${"id" . "$i"} = "$row[id]";
if ($_GET['type']=="books") {
	# code...

$img = "$row[image]";
$name = "$row[name]";
$writer = "$row[writer]";
$price = "$row[price]";
    	
 }   	// echo ${"img" . $i};
   else{
$img = "$row[image]";
$name = "$row[brand]";
$writer= "$row[details]";
$price = "$row[price]";

}
        // if($i==8){break;}
        // else
        // 	        $i++;

    }
} else {
    echo "0 results";
}
    	// echo ${"img" . 1};
// echo "$img9";


// mysqli_close($conn);
}

$id=$_GET['edit'];
$type=$_GET['type'];
$res=0;
if (isset($_SESSION['Username'])) {
	session_start();

	}

 if (isset($_POST['addtocart'])) {
	if (isset($_SESSION['Username'])) {

}
else
	session_start();

// session_unset();
// if (array_key_exists($id,$_SESSION[$type][$id])){
if (isset($_SESSION[$type][$id])) {

if ($_SESSION[$type][$id]==array('name' =>$name ,'price' =>$price,'img' =>$img, 'qty' =>$_POST['quantity'],'size' =>$_POST['size'])) {
	
 
// echo "here in if";
$res=0;
// $_SESSION[$type][$id]=array('name' =>$name ,'price' =>$price,'img' =>$img, 'qty' =>$_POST['quantity'],'size' =>$_POST['size']);
// $arr=$_SESSION[$type][$id];
// session_unset();
// echo "$arr[qty]";
		// print_r($_SESSION);
		// "$_SESSION[$type][$id]";	
}}


else 
{$_SESSION[$type][$id]=array('name' =>$name ,'price' =>$price,'img' =>$img, 'qty' =>$_POST['quantity'],'size' =>$_POST['size']);
$res=1;
}
}// {
// 	echo "here in else";
// 	echo "<script>
// alert('Item Already Exist in Cart!');

// </script>

// ";

// 	}
// echo "$res";
?>

	 

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Welcome To Estore</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		
		<!-- bootstrap -->
	i	<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>

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

		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/main.css" rel="stylesheet"/>
		<link href="themes/css/jquery.fancybox.css" rel="stylesheet"/>
				
		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<script src="themes/js/jquery.fancybox.js"></script>
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
			</section><section class="header_text sub">
			<img style="height: 200px;width: 100% ;border-bottom-width:5px;border-bottom-style: solid;border-bottom-color: red" class="pageBanner" src="themes/images/eBanner.png" alt="New products" >
			<br>
			<br>
			<?php  
			// if (isset($_POST['addtocart'])) {
				# code...
			if ($res) {
				# code...
			
		echo "<!DOCTYPE html>
<html>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<style>
.alert {
    padding: 20px;
    background-color: #f44336;
    color: white;
    opacity: 1;
    transition: opacity 0.6s;
    margin-bottom: 15px;
}

.alert.success {background-color: orange;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}
</style>
</head>
<body>


<div class='alert success' style='color:white;width:100%;background-color:green'>
  <span class='closebtn' >&times;</span>  
  <p style='font-size: 20px;text-shadow: hsla();color:white' id='cart'>This Item is Added Successfully To The Cart</p>
  <button class='btn btn primary' style='float:;color:blue;margin-left:5px;margin-top:-2px'><a href='index.php'>Continue Shopping</a></button>
	<button class='btn btn primary' style='float:;margin-left: 2px;color:blue;margin-top:-2px'><a href='cart.php'>Checkout
	</a></button>
</div>


<script>
var close = document.getElementsByClassName('closebtn');
var i;

for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = '0';
        setTimeout(function(){ div.style.display = 'none'; }, 600);
    }
}
</script>

</body>
</html>";

// print_r($_SESSION);	

}


// else if ($_SESSION[$type][$id]==array('name' =>$name ,'price' =>$price,'img' =>$img, 'qty' =>$_POST['quantity'],'size' =>$_POST['size'])) {
else if (isset($_POST['addtocart'])&&$res==0) {

		
	
	
		echo "<!DOCTYPE html>
<html>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<style>
.alert {
    padding: 20px;
    background-color: #f44336;
    color: white;
    opacity: 1;
    transition: opacity 0.6s;
    margin-bottom: 15px;
}

.alert.success {background-color: orange;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}
</style>
</head>
<body>


<div class='alert success' style='color:white;width:100%;background-color:red'>
  <span class='closebtn' >&times;</span>  
  <p style='font-size: 20px;text-shadow: hsla();color:white' id='cart'>This Item Already Exist's in Cart</p>
  <button class='btn btn primary' style='float:;color:blue;margin-left:5px;margin-top:-2px'><a href='index.php'>Continue Shopping</a></button>
	<button class='btn btn primary' style='float:;margin-left: 2px;color:blue;margin-top:-2px'><a href=''>Checkout
	</a></button>
</div>


<script>
var close = document.getElementsByClassName('closebtn');
var i;

for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = '0';
        setTimeout(function(){ div.style.display = 'none'; }, 600);
    }
}
</script>

</body>
</html>";

}
			?>
				<h4><span>Product Detail</span></h4>
			</section>

			<section class="main-content">				
				<div class="row">						
					<div class="span9">
						<div class="row">
							<div class="span4" >
								<a href="<?php echo $img ?>" class="thumbnail" data-fancybox-group="group1" title="<?php if($_GET['type']=='books'){echo $name.' by '.$writer;} else{echo $writer.' by '.$name;}  ?>"><img style="width: 300px;height: 350px" alt="" src="<?php  echo $img ?>" ></a>												
								<ul class="thumbnails small">								
									<li class="span1">
										<a href="<?php  echo $img ?>" class="thumbnail" data-fancybox-group="group1" title="<?php if($_GET['type']=='books'){echo $name.' by '.$writer;} else{echo $writer.' by '.$name;}  ?>"><img src="<?php  echo $img ?>" alt=""></a>
									</li>								
								<!-- 	<li class="span1">
										<a href="themes/images/ladies/3.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 3"><img src="themes/images/ladies/3.jpg" alt=""></a>
									</li>													
									<li class="span1">
										<a href="themes/images/ladies/4.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 4"><img src="themes/images/ladies/4.jpg" alt=""></a>
									</li>
									<li class="span1">
										<a href="themes/images/ladies/5.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 5"><img src="themes/images/ladies/5.jpg" alt=""></a>
									</li> -->
								</ul>
							</div>
							<div class="span5">
								<address>
									<strong>Brand:</strong> <span><?php  echo $name ?></span><br>
									<strong>Product Code:</strong> <span><?php  echo $_GET['edit'] ?></span><br>
									<strong>Reward Points:</strong> <span>0</span><br>
									<strong>Availability:</strong> <span>In Stock</span><br>								
								</address>									
								<h4><strong>Price: Rs. <?php  echo $price ?></strong></h4>
							</div>
							<div class="span5">
								<form class="form-inline" method="post" >
									<label class="radio">
										<input type="radio" value="large" name="size" required > Large
									</label>
									<br/>
									<label class="checkbox">
										<input type="radio" value="medium" name="size" required > Medium
									</label>
									<br>
									<label class="checkbox">
									  <input type="radio" value="small" name="size" required> Small
									</label>
									<p>&nbsp;</p>
									<label>Qty:</label>
									<input type="text" class="span1" placeholder="1" value="1" name="quantity" required>
									<button class="btn btn-inverse" type="submit" name="addtocart" id="cart">Add to cart</button>

								</form>

							</div>							
						</div>
						<div class="row">
							<div class="span9">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active"><a href="#home">Description</a></li>
									<li class=""><a href="#profile">Additional Information</a></li>
								</ul>							 
								<div class="tab-content">
									<div class="tab-pane active" id="home"><?php if($_GET['type']=='books'){echo $name.' by '.$writer;} else{echo $writer.' by '.$name;}  ?></div>
									<div class="tab-pane" id="profile">
										<table class="table table-striped shop_attributes">	
											<tbody>
												<tr class="">
													<th>Size</th>
													<td>Large, Medium, Small, X-Large</td>
												</tr>		
												<tr class="alt">
													<th>Colour</th>
													<td>Orange, Yellow</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>							
							</div>						
							<div class="row" style="margin-left: 1%;margin-top: 15%">
								<div class="span12">
									<h4 class="title">
										<span class="pull-left"><span class="text"><span class="line">Related <strong>Products</strong></span></span></span>
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

	$sql = "SELECT * FROM $_GET[type]
	ORDER BY id DESC;";
	$result = mysqli_query($conn, $sql);
	$i=1;
	// ${"check" . $counter} = "some value";
	// ${"img" . $i} = "some value";

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        // echo "image: " . "<img src='$row[image]'>". " - Name: " . $row["name"]. " " . $row["writer"].$row["price"]. "<br>";
	 if ($_GET['type']=="books") {

	${"id" . "$i"} = "$row[id]";
	${"img" . "$i"} = "$row[image]";
	${"name" . "$i"} = "$row[name]";
	${"writer" . "$i"} = "$row[writer]";
	${"price" . "$i"} = "$row[price]";
	 }
	 else{
	${"id" . "$i"} = "$row[id]";
	${"img" . "$i"} = "$row[image]";
	${"name" . "$i"} = "$row[brand]";
	${"writer" . "$i"} = "$row[details]";
	${"price" . "$i"} = "$row[price]";
	 	
	 }   	
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
					<div class="span3 col">
						<div class="block">	
							<ul class="nav nav-list">
								<li class="nav-header">SUB CATEGORIES</li>
								<li><a href="products.php?page=mclothes">Clothes For Men</a></li>
								<li><a href="products.php?page=wclothes">Clothes For Women</a></li>
								<li><a href="products.php?page=cclothes">Clothes For Children</a></li>
								<li><a href="products.php?page=Cosmetics">Cosmetics</a></li>
								<li><a href="products.php?page=books">Books</a></li>
								<li><a href="products.php?page=shoes"</a>Shoes</li>
							</ul>
							<br/>
							<ul class="nav nav-list below">
								<li class="nav-header">MANUFACTURES</li>
								<li><a href="products.php?page=">Adidas</a></li>
								<li><a href="products.php?page=">Nike</a></li>
								<li><a href="products.php?page=">Dunlop</a></li>
								<li><a href="products.php?page=">Yamaha</a></li>
							</ul>
						</div>
					<!-- 	<div class="block">
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
													<a href="product_detail.php"><img alt="" src="themes/images/ladies/7.jpg"></a><br/>
													<a href="product_detail.php" class="title">Fusce id molestie massa</a><br/>
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
													<a href="product_detail.php"><img alt="" src="themes/images/ladies/8.jpg"></a><br/>
													<a href="product_detail.php" class="title">Tempor sem sodales</a><br/>
													<a href="#" class="category">Urna nec lectus mollis</a>
													<p class="price">$134</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					 -->	<!-- <div class="block">								
							<h4 class="title"><strong>Best</strong> Seller</h4>								
							<ul class="small-product">
								<li>
									<a href="#" title="Praesent tempor sem sodales">
										<img src="themes/images/ladies/1.jpg" alt="Praesent tempor sem sodales">
									</a>
									<a href="#">Praesent tempor sem</a>
								</li>
								<li>
									<a href="#" title="Luctus quam ultrices rutrum">
										<img src="themes/images/ladies/2.jpg" alt="Luctus quam ultrices rutrum">
									</a>
									<a href="#">Luctus quam ultrices rutrum</a>
								</li>
								<li>
									<a href="#" title="Fusce id molestie massa">
										<img src="themes/images/ladies/3.jpg" alt="Fusce id molestie massa">
									</a>
									<a href="#">Fusce id molestie massa</a>
								</li>   
							</ul>
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
		<script>
			$(function () {
				$('#myTab a:first').tab('show');
				$('#myTab a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				})
			})
			$(document).ready(function() {
				$('.thumbnail').fancybox({
					openEffect  : 'none',
					closeEffect : 'none'
				});
				
				$('#myCarousel-2').carousel({
                    interval: 2500
                });								
			});
		</script>
    </body>
</html>
<?php mysqli_close($conn);  ?>