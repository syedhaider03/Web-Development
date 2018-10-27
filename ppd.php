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
?>

<?php 
	if (isset($_POST['addtocart'])) {
		session_start();
		$_SESSION['name']=$name;
		$_SESSION['price']=$price;
		$_SESSION['image']=$img;
		$_SESSION['qty']=$_POST['quantity'];
		$_SESSION['size']=$_POST['size'];

		// foreach ($_SESSION as $key => $value) {
		// 	echo "$value";
		// }
		// echo $_SESSION['qty'];
		echo 
"<div class='container' >
  <h2>Basic Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal'>Open Modal</button>

  <!-- Modal -->
  <div class='modal fade' id='myModal' role='dialog'>
    <div class='modal-dialog'>
    
      <!-- Modal content-->
      <div class='modal-content' style='height='200px'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
          <h4 class='modal-title'>Modal Header</h4>
        </div>
        <div class='modal-body'>
          <p>Item Added To Cart</p>
        </div>
        <div class='modal-footer'>
          <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

";

	}

	 ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Bootstrap E-commerce Templates</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		
		<!-- bootstrap -->
		<link rel='stylesheet prefetch' href='https://raw.githubusercontent.com/greenwoodents/quickbeam.js/master/demo/css/demo.css'>

      <link rel="stylesheet" href="css/style.css">

				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 -->
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
				<div class="span8" style="float: right;;margin-top: -12px;margin-bottom: 10px">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="#"> <i class="glyphicon glyphicon-edit	
"></i> My Account</a></li>
							<li><a href="cart.html"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
</a></li>
							<li><a href="checkout.html"><i class="glyphicon glyphicon-check	
"></i> Checkout</a></li>					
							<li><a href="register.html"><i class="glyphicon glyphicon-user	
"></i> Login|Register</a></li>		
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
							<li><a href="./products.html">Woman</a>					
								<ul>
									<li><a href="./products.html">Lacinia nibh</a></li>									
									<li><a href="./products.html">Eget molestie</a></li>
									<li><a href="./products.html">Varius purus</a></li>									
								</ul>
							</li>															
							<li><a href="./products.html">Man</a></li>			
							<li><a href="./products.html">Sport</a>
								<ul>									
									<li><a href="./products.html">Gifts and Tech</a></li>
									<li><a href="./products.html">Ties and Hats</a></li>
									<li><a href="./products.html">Cold Weather</a></li>
								</ul>
							</li>							
							<li><a href="./products.html">Hangbag</a></li>
							<li><a href="./products.html">Best Seller</a></li>
							<li><a href="./products.html">Top Seller</a></li>
						</ul>
					</nav>
				</div>
			</section>
		
<div class="breadcrumb" role="navigation" aria-label="Breadcrumbs">
    <div class="_cont">
      <ol>
        <li><a title="Back to the frontpage">Home</a></li>
        <li><a title="">Men</a></li>
        <li>Tony Hunfinger T-Shirt New York</li>
      </ol>
    </div>
  </div>
</header>
<section aria-label="Main content" role="main" class="product-detail">
  <div itemscope itemtype="http://schema.org/Product">
    <meta itemprop="url" content="http://html-koder-test.myshopify.com/products/tommy-hilfiger-t-shirt-new-york">
    <meta itemprop="image" content="//cdn.shopify.com/s/files/1/1047/6452/products/product_grande.png?v=1446769025">
    <div class="shadow">
      <div class="_cont detail-top">
        <div class="cols">
          <div class="left-col">
            <div class="thumbs">
              <a class="thumb-image active" href="//cdn.shopify.com/s/files/1/1047/6452/products/product_1024x1024.png?v=1446769025" data-index="0">
                <span><img src="//cdn.shopify.com/s/files/1/1047/6452/products/product_150x150.png?v=1446769025" alt="Tommy Hilfiger T-Shirt New York"></span>
              </a>
              <a class="thumb-image" href="//cdn.shopify.com/s/files/1/1047/6452/products/tricko1_1024x1024.jpg?v=1447104179" data-index="1">
                <span><img src="//cdn.shopify.com/s/files/1/1047/6452/products/tricko1_150x150.jpg?v=1447104179" alt="Tommy Hilfiger T-Shirt New York"></span>
              </a>
              <a class="thumb-image" href="//cdn.shopify.com/s/files/1/1047/6452/products/tricko2_1024x1024.jpg?v=1447104180" data-index="2">
                <span><img src="//cdn.shopify.com/s/files/1/1047/6452/products/tricko2_150x150.jpg?v=1447104180" alt="Tommy Hilfiger T-Shirt New York"></span>
              </a>
              <a class="thumb-image" href="//cdn.shopify.com/s/files/1/1047/6452/products/tricko3_1024x1024.jpg?v=1447104182" data-index="3">
                <span><img src="//cdn.shopify.com/s/files/1/1047/6452/products/tricko3_150x150.jpg?v=1447104182" alt="Tommy Hilfiger T-Shirt New York"></span>
              </a>
            </div>
            <div class="big">
              <span id="big-image" class="img" quickbeam="image" style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/product_1024x1024.png?v=1446769025')" data-src="//cdn.shopify.com/s/files/1/1047/6452/products/product_1024x1024.png?v=1446769025"></span>
              <div id="banner-gallery" class="swipe">
                <div class="swipe-wrap">
                  <div style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/product_large.png?v=1446769025')"></div>
                  <div style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko1_large.jpg?v=1447104179')"></div>
                  <div style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko2_large.jpg?v=1447104180')"></div>
                  <div style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko3_large.jpg?v=1447104182')"></div>
                </div>
              </div>
              <div class="detail-socials">
                <div class="social-sharing" data-permalink="http://html-koder-test.myshopify.com/products/tommy-hilfiger-t-shirt-new-york">
                  <a target="_blank"  class="share-facebook" title="Share"></a>
                  <a target="_blank"  class="share-twitter" title="Tweet"></a>
                  <a target="_blank"  class="share-pinterest" title="Pin it"></a>
                </div>
              </div>
            </div>
          </div>
          <div class="right-col">
            <h1 itemprop="name">Tony Hunfinger T-Shirt New York</h1>
            <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
              <meta itemprop="priceCurrency" content="USD">
              <link itemprop="availability" href="http://schema.org/InStock">
              <div class="price-shipping">
                <div class="price" id="price-preview" quickbeam="price" quickbeam-price="800">
                  $800.00
                </div>
                <a>Free shipping</a>
              </div>
              <div class="swatches">
                <div class="swatch clearfix" data-option-index="0">
                  <div class="header">Size</div>
                  <div data-value="M" class="swatch-element plain m available">
                    <input id="swatch-0-m" type="radio" name="option-0" value="M" checked  />
                    <label for="swatch-0-m">
                      M
                      <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                    </label>
                  </div>
                  <div data-value="L" class="swatch-element plain l available">
                    <input id="swatch-0-l" type="radio" name="option-0" value="L"  />
                    <label for="swatch-0-l">
                      L
                      <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                    </label>
                  </div>
                  <div data-value="XL" class="swatch-element plain xl available">
                    <input id="swatch-0-xl" type="radio" name="option-0" value="XL"  />
                    <label for="swatch-0-xl">
                      XL
                      <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                    </label>
                  </div>
                  <div data-value="XXL" class="swatch-element plain xxl available">
                    <input id="swatch-0-xxl" type="radio" name="option-0" value="XXL"  />
                    <label for="swatch-0-xxl">
                      XXL
                      <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                    </label>
                  </div>
                </div>
                <div class="swatch clearfix" data-option-index="1">
                  <div class="header">Color</div>
                  <div data-value="Blue" class="swatch-element color blue available">
                    <div class="tooltip">Blue</div>
                    <input quickbeam="color" id="swatch-1-blue" type="radio" name="option-1" value="Blue" checked  />
                    <label for="swatch-1-blue" style="border-color: blue;">
                      <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                      <span style="background-color: blue;"></span>
                    </label>
                  </div>
                  <div data-value="Red" class="swatch-element color red available">
                    <div class="tooltip">Red</div>
                    <input quickbeam="color" id="swatch-1-red" type="radio" name="option-1" value="Red"  />
                    <label for="swatch-1-red" style="border-color: red;">
                      <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                      <span style="background-color: red;"></span>
                    </label>
                  </div>
                  <div data-value="Yellow" class="swatch-element color yellow available">
                    <div class="tooltip">Yellow</div>
                    <input quickbeam="color" id="swatch-1-yellow" type="radio" name="option-1" value="Yellow"  />
                    <label for="swatch-1-yellow" style="border-color: yellow;">
                      <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                      <span style="background-color: yellow;"></span>
                    </label>
                  </div>
                </div>
                <div class="guide">
                  <a>Size guide</a>
                </div>
              </div>
              <!-- <form method="post" enctype="multipart/form-data" id="AddToCartForm"> -->
              <form id="AddToCartForm">
                <select name="id" id="productSelect" quickbeam="product" class="product-single__variants">
                  <option  selected="selected"  data-sku="" value="7924994501">
                    M / Blue - $800.00 USD
                  </option>
                  <option  data-sku="" value="7924995077">
                    M / Red - $850.00 USD
                  </option>
                  <option  data-sku="" value="7924994437">
                    L / Blue - $850.00 USD
                  </option>
                  <option  data-sku="" value="7924994693">
                    L / Yellow - $850.00 USD
                  </option>
                  <option  data-sku="" value="7924995013">
                    L / Red - $850.00 USD
                  </option>
                  <option  data-sku="" value="7924994373">
                    XL / Blue - $900.00 USD
                  </option>
                  <option  data-sku="" value="7924994629">
                    XL / Yellow - $850.00 USD
                  </option>
                  <option  data-sku="" value="7924830021">
                    XXL / Blue - $950.00 USD
                  </option>
                  <option  data-sku="" value="7924994885">
                    XXL / Red - $850.00 USD
                  </option>
                </select>
                <div class="btn-and-quantity-wrap">
                  <div class="btn-and-quantity">
                    <div class="spinner">
                      <span class="btn minus" data-id="2721888517"></span>
                      <input type="text" id="updates_2721888517" name="quantity" value="1" class="quantity-selector">
                      <input type="hidden" id="product_id" name="product_id" value="2721888517">
                      <span class="q">Qty.</span>
                      <span class="btn plus" data-id="2721888517"></span>
                    </div>
                    <div id="AddToCart" quickbeam="add-to-cart">
                      <span id="AddToCartText">Add to Cart</span>
                    </div>
                  </div>
                </div>
              </form>
              <div class="tabs">
                <div class="tab-labels">
                  <span data-id="1" class="active">Info</span>
                  <span data-id="2">Brand</span>
                </div>
                <div class="tab-slides">
                  <div id="tab-slide-1" itemprop="description"  class="slide active">
                    We open source it for you https://github.com/greenwoodents/quickbeam.js if you want to use it on your ecommerce.
                  </div>
                  <div id="tab-slide-2" class="slide">
                    Tony Hunfinger
                  </div>
                </div>
              </div>
              <div class="social-sharing-btn-wrapper">
                <span id="social_sharing_btn">Share</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <aside class="related">
      <div class="_cont">
        <h2>You might also like</h2>
        <div class="collection-list cols-4" id="collection-list" data-products-per-page="4">
          <a class="product-box">
            <span class="img">
              <span style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko1_70d2887b-ec6a-4bcb-a93b-7fd1783e6445_grande.jpg?v=1447530130')" class="i first"></span>
              <span class="i second" style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/product_030f9fc5-f253-4dca-a43a-fe2b719d0704_grande.png?v=1447530130')"></span>
            </span>
            <span class="text">
              <strong>Tony Hunfinger T-Shirt New York 2</strong>
              <span>
                From $800.00
              </span>
              <div class="variants">
                <div class="variant">
                  <div class="var m available">
                    <div class="t">M</div>
                  </div>
                  <div class="var l available">
                    <div class="t">L</div>
                  </div>
                  <div class="var xl available">
                    <div class="t">XL</div>
                  </div>
                  <div class="var xxl available">
                    <div class="t">XXL</div>
                  </div>
                </div>
                <div class="variant">
                  <div class="var color blue available">
                    <div class="c" style="background-color: blue;"></div>
                  </div>
                  <div class="var color red available">
                    <div class="c" style="background-color: red;"></div>
                  </div>
                  <div class="var color yellow available">
                    <div class="c" style="background-color: yellow;"></div>
                  </div>
                </div>
              </div>
            </span>
          </a>
          <a class="product-box">
            <span class="img">
              <span style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko2_357767df-d7ff-4b58-b705-edde76bb32b7_grande.jpg?v=1447530150')" class="i first"></span>
              <span class="i second" style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko1_613d5776-ea61-4f9b-abef-0ce847c63a67_grande.jpg?v=1447530150')"></span>
            </span>
            <span class="text">
              <strong>Tony Hunfinger T-Shirt New York 3</strong>
              <span>
                From $800.00
              </span>
              <div class="variants">
                <div class="variant">
                  <div class="var m available">
                    <div class="t">M</div>
                  </div>
                  <div class="var l available">
                    <div class="t">L</div>
                  </div>
                  <div class="var xl available">
                    <div class="t">XL</div>
                  </div>
                  <div class="var xxl available">
                    <div class="t">XXL</div>
                  </div>
                </div>
                <div class="variant">
                  <div class="var color blue available">
                    <div class="c" style="background-color: blue;"></div>
                  </div>
                  <div class="var color red available">
                    <div class="c" style="background-color: red;"></div>
                  </div>
                  <div class="var color yellow available">
                    <div class="c" style="background-color: yellow;"></div>
                  </div>
                </div>
              </div>
            </span>
          </a>
          <a href="/collections/men/products/copy-of-copy-of-copy-of-tommy-hilfiger-t-shirt-new-york-4" class="product-box">
            <span class="img">
              <span style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko3_0e98498a-123c-4305-9d94-d8280bb46416_grande.jpg?v=1447530164')" class="i first"></span>
              <span class="i second" style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko2_6c949188-dba0-4789-9434-c0821b92f3f4_grande.jpg?v=1447530164')"></span>
            </span>
            <span class="text">
              <strong>Tony Hunfinger T-Shirt New York 4</strong>
              <span>
                From $800.00
              </span>
              <div class="variants">
                <div class="variant">
                  <div class="var m available">
                    <div class="t">M</div>
                  </div>
                  <div class="var l available">
                    <div class="t">L</div>
                  </div>
                  <div class="var xl available">
                    <div class="t">XL</div>
                  </div>
                  <div class="var xxl available">
                    <div class="t">XXL</div>
                  </div>
                </div>
                <div class="variant">
                  <div class="var color blue available">
                    <div class="c" style="background-color: blue;"></div>
                  </div>
                  <div class="var color red available">
                    <div class="c" style="background-color: red;"></div>
                  </div>
                  <div class="var color yellow available">
                    <div class="c" style="background-color: yellow;"></div>
                  </div>
                </div>
              </div>
            </span>
          </a>
          <a class="product-box">
            <span class="img">
              <span style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/product_7d606126-1b60-4738-99b3-062810f2db8b_grande.png?v=1447530674')" class="i first"></span>
              <span class="i second" style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko3_fd08d231-654c-4304-81b2-9191e6fd141e_grande.jpg?v=1447530674')"></span>
            </span>
            <span class="text">
              <strong>Tony Hunfinger T-Shirt New York 5</strong>
              <span>
                From $800.00
              </span>
              <div class="variants">
                <div class="variant">
                  <div class="var m available">
                    <div class="t">M</div>
                  </div>
                  <div class="var l available">
                    <div class="t">L</div>
                  </div>
                  <div class="var xl available">
                    <div class="t">XL</div>
                  </div>
                  <div class="var xxl available">
                    <div class="t">XXL</div>
                  </div>
                </div>
                <div class="variant">
                  <div class="var color blue available">
                    <div class="c" style="background-color: blue;"></div>
                  </div>
                  <div class="var color red available">
                    <div class="c" style="background-color: red;"></div>
                  </div>
                  <div class="var color yellow available">
                    <div class="c" style="background-color: yellow;"></div>
                  </div>
                </div>
              </div>
            </span>
          </a>
          <a class="product-box hidden">
            <span class="img">
              <span style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko1_bba77d82-7f85-47af-9a45-f4700bcc04ad_grande.jpg?v=1447530689')" class="i first"></span>
              <span class="i second" style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/product_f065e961-d296-48a8-8a67-a3532200e257_grande.png?v=1447530689')"></span>
            </span>
            <span class="text">
              <strong>Tony Hunfinger T-Shirt New York 6</strong>
              <span>
                From $800.00
              </span>
              <div class="variants">
                <div class="variant">
                  <div class="var m available">
                    <div class="t">M</div>
                  </div>
                  <div class="var l available">
                    <div class="t">L</div>
                  </div>
                  <div class="var xl available">
                    <div class="t">XL</div>
                  </div>
                  <div class="var xxl available">
                    <div class="t">XXL</div>
                  </div>
                </div>
                <div class="variant">
                  <div class="var color blue available">
                    <div class="c" style="background-color: blue;"></div>
                  </div>
                  <div class="var color red available">
                    <div class="c" style="background-color: red;"></div>
                  </div>
                  <div class="var color yellow available">
                    <div class="c" style="background-color: yellow;"></div>
                  </div>
                </div>
              </div>
            </span>
          </a>
          <a class="product-box hidden">
            <span class="img">
              <span style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko2_bf59c7f2-7c1f-4822-9494-6a984598a56c_grande.jpg?v=1447530706')" class="i first"></span>
              <span class="i second" style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko1_c6fa0fc1-99a0-4bd0-a1d8-0270127977fc_grande.jpg?v=1447530706')"></span>
            </span>
            <span class="text">
              <strong>Tony Hunfinger T-Shirt New York 7</strong>
              <span>
                From $800.00
              </span>
              <div class="variants">
                <div class="variant">
                  <div class="var m available">
                    <div class="t">M</div>
                  </div>
                  <div class="var l available">
                    <div class="t">L</div>
                  </div>
                  <div class="var xl available">
                    <div class="t">XL</div>
                  </div>
                  <div class="var xxl available">
                    <div class="t">XXL</div>
                  </div>
                </div>
                <div class="variant">
                  <div class="var color blue available">
                    <div class="c" style="background-color: blue;"></div>
                  </div>
                  <div class="var color red available">
                    <div class="c" style="background-color: red;"></div>
                  </div>
                  <div class="var color yellow available">
                    <div class="c" style="background-color: yellow;"></div>
                  </div>
                </div>
              </div>
            </span>
          </a>
        </div>
        <div class="more-products" id="more-products-wrap">
          <span id="more-products" data-rows_per_page="1">More products</span>
        </div>
      </div>
    </aside>
  </div>

</section>
<footer role="contentinfo" aria-label="Footer">
  <div class="_cont">
    <div class="socials">
      <strong>follow us:</strong>
      <ul>
        <li><a  title="html-koder / test on Twitter" class="tw" target="_blank">Twitter</a></li>
        <li><a  title="html-koder / test on Facebook" class="fb" target="_blank">Facebook</a></li>
        <li><a  title="html-koder / test on Instagram" class="in" target="_blank">Instagram</a></li>
        <li><a  title="html-koder / test on Pinterest" class="pi" target="_blank">Pinterest</a></li>
      </ul>
    </div>
    <div class="top">
      <div class="right">
        <form method="post" action="/contact" class="contact-form" accept-charset="UTF-8">
          <input type="hidden" value="customer" name="form_type" /><input type="hidden" name="utf8" value="✓" />
          <div>
            <input type="hidden" id="contact_tags" name="contact[tags]" value="newsletter"/>
            <input type="text" id="contact_email" name="contact[email]" placeholder="Submit e-mail for special offers...">
            <button type="submit" title="Newsletter Signup">OK</button>
          </div>
        </form>
      </div>
      <div class="left">
        <span class="phone">+420 123 456 789</span>
        <a class="mail" href="mailto:email.from@settings.com">email.from@settings.com</a>
      </div>
    </div>
    <div class="bottom">
      <div class="left">
        <nav role="navigation" aria-label="Service menu">
          <ul>
            <li><a >Lorem ipsum</a></li>
            <li><a >About Us</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</footer>

<!-- Quickbeam cart-->

<div id="quick-cart" quickbeam="cart">
  <a id="quick-cart-pay" quickbeam="cart-pay" class="cart-ico">
    <span>
      <strong class="quick-cart-text">Pay<br></strong>
      <span id="quick-cart-price">0</span>
      <span id="quick-cart-pay-total-count">0</span>
    </span>
  </a>
</div>

<!-- Quickbeam cart end -->
  <script src='http://raw.githubusercontent.com/greenwoodents/quickbeam.js/master/dist/quickbeam.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
