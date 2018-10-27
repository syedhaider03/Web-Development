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
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">


  
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
<div  class="container-fluid" style=width: 80%;height: 1000px;margin-top: 50px">
  <!-- multistep form -->
<form id="msform">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Account Setup</li>
    <li>Social Profiles</li>
    <li>Personal Details</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Create your account</h2>
    <h3 class="fs-subtitle">This is step 1</h3>
    <input type="text" name="email" placeholder="Email" />
    <input type="password" name="pass" placeholder="Password" />
    <input type="password" name="cpass" placeholder="Confirm Password" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Social Profiles</h2>
    <h3 class="fs-subtitle">Your presence on the social network</h3>
    <input type="text" name="twitter" placeholder="Twitter" />
    <input type="text" name="facebook" placeholder="Facebook" />
    <input type="text" name="gplus" placeholder="Google Plus" />
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Personal Details</h2>
    <h3 class="fs-subtitle">We will never sell it</h3>
    <input type="text" name="fname" placeholder="First Name" />
    <input type="text" name="lname" placeholder="Last Name" />
    <input type="text" name="phone" placeholder="Phone" />
    <textarea name="address" placeholder="Address"></textarea>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="submit" class="submit action-button" value="Submit" />
  </fieldset>
</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

  

    <script  src="js/index.js"></script>


</div>

</div>	
</body>
</html>