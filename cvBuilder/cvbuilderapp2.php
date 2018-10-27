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
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
<link rel="stylesheet" type="text/css" href="container.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="layout"> -->
  <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap.min.css'>
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    
  <link rel='stylesheet prefetch' href='https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css'>

      <link rel="stylesheet" href="css/style.css">

  
      <!-- <link rel="stylesheet" href="css2/style2.css"> -->
      <!-- <link rel="stylesheet" href="css/style.css"> -->



<style type="text/css">
  
</style>



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
      <li><a href="login2.html">CV Builder</a></li>
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

</head>
<body style="background-color: #006064">
<h1 style=" font-weight: bold;font-size: 500%;color: white/*#1565C0*/;text-shadow: 2px 2px 4px #000000;text-align: center;">Create Your Resume in Minutes!<span class="badge badge-secondary" ></h1>	
<div  class="container-fluid" style="background-color: #E0F7FA;width: 80%;height: 700px;margin-top: 50px">


  <div class="container" style="border-color: black;width: 100%;height: 600px">
  <ul class="tabs grid-2 active" style="border-color: black;height: 610px">
    <li class="open" style="border-color: black" >
      <a href="#div1"  style="border-color: black;height: 150px">
        <span class="step-number"></span>Upload Photo
      </a>
    </li>

    <li style="border-color: black">
      <a href="#div2" style="border-color: black;height: 150px">
        <span class="step-number"></span> Personal Details
      </a>
    </li>

    <li style="border-color: black">
      <a href="#div3" style="border-color: black;height: 150px">
        <span class="step-number"></span> Experience
      </a>
    </li>
  </ul>
  <div class="grid-10" style="color: black">
    <div class="tabbed-content "  id="div1" style="border-color: black;">
      <div>
      Step 1-Upload Photo
      </div>
    </div>
    <div class="tabbed-content" id="div2" style="border-color: black;width: 100%;">
      Step 2- Enter Personal Details
    </div>
    <div class="tabbed-content" id="div3" style="border-color: black">
      Step 3- Enter Experience
    </div>
  </div>
</div>
  <script src='https://code.jquery.com/jquery-1.10.2.js'></script>
<script src='https://code.jquery.com/ui/1.11.4/jquery-ui.js'></script>

  

    <script  src="js/index.js"></script>

</div>

</div>	
</body>
</html>