<?php session_start(); 
if(!isset($_SESSION['Username'])){
  header(header('location:http://localhost/cvbuilder/login_proceed.html'));
}
?>

<!DOCTYPE html>
<html lang="en" style=" height: 200%;  background: linear-gradient(to bottom right, blue, yellow);" >

<head>
  <meta charset="UTF-8">
  <title>Multi Step Form with Progress Bar using jQuery and CSS3</title>
        <link rel="stylesheet" href="css/style.css">

    <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap.min.css'>
<!-- <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'> -->
    
  <link rel='stylesheet prefetch' href='https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css'>

      <!-- <link rel="stylesheet" href="css/style.css"> -->
          <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"> -->

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"> -->

  
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


  
</head>

<body>

<div id="container" style="float: left;margin-left: -3%;width: 100%;height: 500px">
  <h1 style=" margin-left: 6%;font-weight: bold;font-size: 500%;color: white/*#1565C0*/;text-shadow: 2px 2px 4px #000000;text-align: center;">Start Building Resume!<span class="badge badge-secondary" ></h1>  

  <!-- multistep form -->
<form action="cvdata2.php" method="post"  id="msform" class="form-horizontal"  style="width: 50%" enctype="multipart/form-data" >
  <!-- progressbar -->
  <ul id="progressbar" >
    <li class="active" style="width: 25%">Education</li>
    <li style="width: 25%">Experience</li>
    <li style="width: 25%">Personal Details</li>
   <li style="width: 25%">Submit</li>

    


  </ul>
  <!-- fieldsets -->
  <fieldset style="margin-left: 85px" >
    <h2 class="fs-title">Education Info</h2>
    <h3 class="fs-subtitle">Degree,Institute & Year Of Passing</h3>
    <!-- <label for="file" class="btn" style="float:left; ">Degree,Institute & Year Of Passing</label> -->

    <input type="text" name="matric" placeholder="Matriculation" style="width: 33.33%;float: left;height: 20px;margin-top: 33.5px" />
    <input type="text" name="Institute1" placeholder="Institute" style="width: 33.33%;float: left;height: 20px;margin-top:33.5px" />

    <input type="Date" name="myear" placeholder="Year" style="width: 33.33%;height: 20px;margin-top: 33.5px"/>      
        <!-- <label for="files" class="btn">Degree & Year Of Passing</label> -->

    <input type="text" name="inter" placeholder="Intermediate" style="width: 33.33%;float: left;height: 20px;margin-top: 10px" />
    <input type="text" name="Institute2" placeholder="Institute" style="width: 33.33%;float: left;height: 20px;margin-top: 10px" />
    <input type="Date" name="iyear" placeholder="Year" style="width: 33.33%;height: 20px;margin-top: 10px"/>   
        <!-- <label for="files" class="btn">Degree & Year Of Passing</label> -->

    <input type="text" name="bachelor" placeholder="Bachelor's" style="width: 33.33%;float: left;height: 20px;margin-top: 10px" />
        <input type="text" name="Institute3" placeholder="Institute" style="width: 33.33%;float: left;height: 20px;margin-top: 10px" />

    <input type="Date" name="byear" placeholder="Year" style="width: 33.33%;height: 20px;margin-top: 10px"/>  
        <!-- <label for="files" class="btn">Degree & Year Of Passing</label> -->

    <input type="text" name="master" placeholder="Master's" style="width: 33.33%;float: left;height: 20px;margin-top: 10px" />
        <input type="text" name="Institute4" placeholder="Institute" style="width: 33.33%;float: left;height: 20px;margin-top: 10px" />

    <input type="Date" name="msyear" placeholder="Year" style="width: 33.33%;height: 20px;margin-top: 10px"/>      
    
       <!-- <label for="files" class="btn">Degree & Year Of Passing</label> -->

    <input type="text" name="higher" placeholder="Higher Degree" style="width: 33.33%;float: left;height: 20px;margin-top: 10px" />
        <input type="text" name="Institute5" placeholder="Institute" style="width: 33.33%;float: left;height: 20px;margin-top: 10px" />

    <input type="Date" name="hyear" placeholder="Year" style="width: 33.33%;height: 20px;margin-top: 10px"/>      
    

    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>

  <fieldset  style="margin-left: 85px">
    <h2 class="fs-title">Experience</h2>
    <h3 class="fs-subtitle">Leave Blank If Haven't Any</h3>
    <!-- <input type="text" name="twitter" placeholder="Twitter" style="width: 80%"/> -->
        <textarea name="exp1" placeholder="First Relevent Experience if Any From Date to Date"></textarea>
        
        <input type="date" name="f1Date"  placeholder="Year" style="width: 50%;float: left;height: 20px;margin-top: -5px"/ >
       <input type="date" name="t1Date" placeholder="Year" style="width: 50%;height: 20px;margin-top: -5px"/>
       
       <textarea name="exp2" placeholder="Second Relevent Experience If Any From Date to Date" style="margin-top: 20px"></textarea>
        
        <input type="date" name="f2Date" placeholder="Year" style="width: 50%;float: left;height: 20px;margin-top: -5px"/>
       <input type="date" name="t2Date" placeholder="Year" style="width: 50%;height: 20px;margin-top: -5px"/>
       
<textarea name="exp3" placeholder="Third Relevent Experience If Any From Date to Date" style="margin-top: 20px"></textarea>
        
        <input type="date" name="f3Date" placeholder="Year" style="width: 50%;float: left;height: 20px;margin-top: -5px"/>
       <input type="date" name="t3Date" placeholder="Year" style="width: 50%;height: 20px;margin-top: -5px"/>
       
        <!-- <button class="btn primary" onclick="myFunction()">Add More</button><br> -->

    <!-- <input type="text" name="facebook" placeholder="Facebook" /> -->
    <!-- <input type="text" name="gplus" placeholder="Google Plus" /> -->
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>

  <fieldset style="margin-left: 85px">
    <h2 class="fs-title">Personal Details</h2>
    <h3 class="fs-subtitle">We will never sell it</h3>
    <label for="files" class="btn">Full Name</label>

    <input type="text" name="FName" placeholder="Enter Full Name" />

    <!-- <input type="text" name="fname" placeholder="First Name" /> -->
    <!-- <input type="text" name="lname" placeholder="Last Name" /> -->
    <label for="files" class="btn">Date of Birth</label>

    <input type="date" name="dob" placeholder="Date of Birth" />
    <label for="files" class="btn">CNIC #</label>

     <input type="text" name="cnic" placeholder="XXXXX-XXXXXXX-X" />
         <label for="files" class="btn">Email</label>

    <input type="Email" name="email" placeholder="Email" />
        <label for="files" class="btn">Phone</label>

    <input type="text" name="phone" placeholder="Phone" />
    <label for="files" class="btn">Address</label>

    <textarea name="address" placeholder="Address"></textarea>
    <label for="files" class="btn">Select Image</label>

    <input type="file" name="photo" placeholder="Upload Photo" />

    <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="Submit"  name="submit" class="action-button" value="Submit" />
<!-- <input type="submit" name="submit" class="action-button"> -->
  </fieldset>
</form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

  

    <script  src="js/index.js"></script>

<!-- 
<script>
function myFunction() {
     var y = document.createElement("textarea");
    y.setAttribute("type", "address");
    y.setAttribute("value", "Experience");
    document.getElementById("msform").appendChild(y);
}
}
</script> -->



</body>

</html>
