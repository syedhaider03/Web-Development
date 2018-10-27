<?php
session_start();
if(!isset($_SESSION['Username'])&&!isset($_SESSION['FName'])){
  header(header('location:http://localhost/cvbuilder/login_proceed.html'));
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
<!-- <style type="text/css">
    td{border-color: black;}
</style> -->
<style type="text/css">
    tr{
        align-content: 
    }

    }
</style>

    <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap.min.css'>
<!-- <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'> -->
    
  <link rel='stylesheet prefetch' href='https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css'>
</head>
<body>
 <center><input type="button" class="btn btn-primary" onclick="printDiv('printableArea')" value="Print me" style="margin-top: 5%" /></center>
<div id="printableArea" class="container" id="a4" style="width: 21cm;height: 29.7cm;background-color:white;margin-top: ;margin-bottom: 5%;border-width: 2px;border-color: black;    border-style: solid;">

	 <img class="img-responsive" src="<?php echo $_SESSION['photo'] ?>" alt="Your Photo" style="width: 5cm;height: 5cm;margin-left: 5px;margin-top: 10px;float: left;margin-right: 50px;border-style: dotted;border-width: 1px"> 
          <h4 style="font-size:20px ;margin-top:;margin-bottom: 2px;"><center>RESUME</center></h4>

     <h1 style="font-size: 50px;margin-top: 30px;margin-bottom: 100px"><?php echo strtoupper( $_SESSION['FName']) ?></h1>
    <div class="container" style="height: 30px;width: 98.5%;align-self: center;border-width: px;border-color: black;    border-style: double;background-color: white"><b>Education</b></div> 
	
<div class="container" style="width: 100%;align-content: center"> 
<table class="table table-striped table-bordered" style=";width:100%;margin-top: 10px;border-color: black;">
    <thead class="thread-inverse">
      <tr>
        <th style="border-color: black;"><center>Degree</center></th>
        <th style="border-color: black"><center>Institute</center></th>
        <th style="border-color: black"><center>Passing Year</center></th>
      </tr>
    </thead>
    <tbody id="b1">
      <!-- <tr>
        <td style="border-color: black">John</td>
        <td style="border-color: black">Doe</td>
        <td style="border-color: black">john@example.com</td>
      </tr>
      <tr>
        <td style="border-color: black">Mary</td>
        <td style="border-color: black">Moe</td>
        <td style="border-color: black">mary@example.com</td>
      </tr> -->

      <?php 

       foreach ($_SESSION as $key => $value) {
    if ($key=="exp1") {
      break;      
      }   
      elseif($value==$_SESSION['Username']||$key=="photo"){
        unset($value);
      }
      elseif ($key=="matric"||$key=="bachelor"||$key=="inter"||$key=="master"||$key=="higher") {
        echo "<tr><td><center>$value</center</td>";
      }
      elseif($key){
         echo "<td><center> $_SESSION[$key]</center></td>";
}
// elseif($key=="inter"){
//          echo "
// }
      // elseif ($key=="myear"||$key=="iyear"||$key=="byear"||$key=="msyear"||$key=="hyear") {
      //     // echo "<td> $_SESSION[$key]</td>";
      // }
      
         if ($key=="iyear"||$key=="myear"||$key=="byear"||$key=="msyear"||$key=="hyear") {
         echo "</tr>";
         }
      

      
}
      ?>

            

    </tbody>
  </table>


</div>
<div class="container" style="height: 30px;width: 98.5%;align-self: center;border-width: px;border-color: black;    border-style: double;background-color: white"><b>Experience</b></div> 
<div class="container-fluid" style="margin-bottom: 5%">
   <ul style="margin-top: 5%">
       <?php {
            // if ($key=="exp1"||$key=="f1Date"||$key=="t1Date"||$key=="exp2"||$key=="f2Date"||$key=="t2Date"||$key=="exp3"||$key=="f3Date"||$key=="t3Date") {
if (isset($_SESSION['exp1'])) {
    

$date1=date_create("$_SESSION[f1Date]");
$date2=date_create("$_SESSION[t1Date]");
$diff=date_diff($date1,$date2);
$date=$diff->format("%R%a days");
echo "<li><label>  $_SESSION[exp1] (from $_SESSION[f1Date] to $_SESSION[t1Date]) ($date).</label></li><br>";
            }

if (isset($_SESSION['exp2'])) {
$date1=date_create("$_SESSION[f2Date]");
$date2=date_create("$_SESSION[t2Date]");
$diff=date_diff($date1,$date2);
$date=$diff->format("%R%a days");
echo "<li> <label> $_SESSION[exp2] (from $_SESSION[f2Date] to $_SESSION[t2Date]) ($date)</label></li><br>";
 }  

if (isset($_SESSION['exp3'])) {
    

$date1=date_create("$_SESSION[f3Date]");
$date2=date_create("$_SESSION[t3Date]");
$diff=date_diff($date1,$date2);
$date=$diff->format("%R%a days");
echo "<li> <label> $_SESSION[exp3] (from $_SESSION[f3Date] to $_SESSION[t3Date]) ($date)</label></li><br>";
}           
}
       ?>
   </ul> 
</div>
<div class="container" style="height: 30px;width: 98.5%;align-self: center;border-width: px;border-color: black;    border-style: double;background-color: white"><b>Personal Details</b></div> 
<div class="container" style="width: 100%;align-content: center"> 

<table class="table table-striped table-bordered" style=";width:100%;margin-top: 10px;border-color: black;align-content: center;">

<?php 
echo"<label>
<tr>
<td><center>Date of Birth</center></td><td><center>$_SESSION[dob]</center></td>
</tr>
<tr>
<td><center>CNIC #</center></td><td><center>$_SESSION[cnic]</center></td>
</tr>

<tr>
<td><center>Phone #</center></td><td><center>$_SESSION[phone]</center></td>
</tr>
<tr>
<td><center>Email</center></td><td><center>$_SESSION[email]</center></td>
</tr>

<tr>
<td><center>Address</center></td><td><center>$_SESSION[address]</center></td>
</tr>

</label>"
 ?>
</table>    
</div>
</div>

<script type="text/javascript">
    function printDiv(printableArea) {
     var printContents = document.getElementById(printableArea).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
</body>
</html>