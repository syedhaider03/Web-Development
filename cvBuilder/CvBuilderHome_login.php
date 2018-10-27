<?php session_start(); 
if(!isset($_SESSION['Username'])){
  header(header('location:http://localhost/cvbuilder/login_proceed.html'));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="container.css">
<!-- <link rel="stylesheet" type="text/css" href="layout"> -->
  <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap.min.css'>

      <link rel="stylesheet" href="css/style.css">

<style type="text/css">
  #l1:hover{
    /*text-decoration: underline;*/
    /*text-decoration-color:black; */
    color: blue;
  }
</style>

<nav class="navbar navbar-inverse">
  <div class="container-fluid" style="border-radius: none">
    <div class="navbar-header">
      <a class="navbar-brand" href="cvbuilderhome.html" style="color: blue">C.V Gene</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="cvbuilderhome_login.php">Home</a></li>
      <li><a href="index.php">CV Builder</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>

    </ul>
   
        </div>
      </div>
    </form>
     <ul class="" >
     <label style="margin-right: 35px;color: white;float: right;margin-top: -25px;font-style: italic; ">Hello, <?php echo $_SESSION['Username']; ?>: <a href="logout.php">Logout</a></label>
    </ul>
  </div>
</nav>


<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
  
</script>
</head>
<body>




<div class="container" style="height: 550px;width: 100%;border: none;float: left;margin-top: 0px;padding: 0;margin: 0;padding-top: 0;margin-top: 0;border: none;padding-top: 0;margin-top: -10px">
  <!-- <h2>Welcome</h2> -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 100%;height: 550px;padding: 0;margin: 0;padding-top: 0;margin-top: 0;border: none;padding-top: 0;margin-top: -10px">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="genie2.jpg" alt="Los Angeles" style="width:100%;height: 550px">
        <div class="carousel-caption">
          <h3><center><label class="w3-jumbo" style="text-shadow: 2px 2px 4px #000000;
        font-size:100px">CV GENIE</label></center></h3>
          <p>Fun Creating CV</p>
        </div>
      </div>

      <div class="item">
        <img src="cv.jpg" alt="Chicago" style="width:100%;height: 550px;">
        <div class="carousel-caption">
          <h3>All For Free</h3>
          <!-- <p>All For Free</p> -->
        </div>
      </div>
    
      <div class="item">
        <img src="3.jpg" alt="New York" style="width:100%;height: 550px;background-repeat: no-repeat;">
        <div class="carousel-caption">
          <h3>Create a Free Resume</h3>
          <!-- <p>!</p> -->
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class="container" >
  <!-- <div class="container-fluid" style="height: 100px;width: "></div> -->
  <label  class="control-label " style="font-size: 300%;margin-left: 5px">Design Your Professional Resume in Minutes!!</label>
    <div class="container" id="container" >

    <img src="11.jpg" class="img-thumbnail" style="width: 100%%;height: 600px ;margin-left: "> 
<!--     <div class="top-left">Design Your Professional Resume in Minutes!!</div>

 <!--  <div class="top-left">Top Left</div> -->

     <a href="index.php"><button type="button" class="btn btn-primary "> Design Now</button></a>


</div>
</div>

<div class="container-fluid" style="background-color: black;width: 100%;height: 40px;margin-top: 50px;color: white;text-align: right;"> Copyright © 2018 CV Genie. All rights reserved</div>

</body>
</html>

