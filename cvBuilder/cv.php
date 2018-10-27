<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
<!-- <style type="text/css">
    td{border-color: black;}
</style> -->
<style type="text/css">
    table td  { 

    }
</style>

    <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap.min.css'>
<!-- <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'> -->
    
  <link rel='stylesheet prefetch' href='https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css'>
</head>
<body>
<div class="container" id="a4" style="width: 21cm;height: 29.7cm;background-color:white;margin-top: 3%;margin-bottom: 5%;border-width: 2px;border-color: black;    border-style: solid;">
	 <img class="img-responsive" src="<?php echo $_SESSION['photo'] ?>" alt="Your Photo" style="width: 5cm;height: 5cm;margin-left: 5px;margin-top: 10px;float: left;margin-right: 50px"> 
     <h1 style="font-size: 50px;margin-top: 50px;margin-bottom: 100px"><?php echo $_SESSION['FName'] ?></h1>
    <div class="container" style="height: 30px;width: 98.5%;align-self: center;border-width: px;border-color: black;    border-style: double;background-color: white"><b>Education</b></div> 
	
<div class="container" style="width: 100%;align-content: center"> 
<table class="table table-striped table-bordered" style="width:100%;margin-top: 10px;border-color: black;">
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
      <?php  foreach ($_SESSION as $key => $value) {
    if ($key=="exp1") {
      break;      
      }   
      elseif($value==$_SESSION['Username']||$key=="photo"){
        // echo $key;
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
      elseif ($key=="myear"||$key=="iyear"||$key=="byear"||$key=="msyear"||$key=="hyear") {
          // echo "<td> $_SESSION[$key]</td>";
      }
      
         if ($value=="iyear"||$key=="myear"||$key=="byear"||$key=="msyear"||$key=="hyear") {
         echo "</tr>";
         }
      

      
}
      ?>
            

    </tbody>
  </table>


</div>

</div>


</body>
</html>