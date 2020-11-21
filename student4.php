<?php 

include("header.php");



 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="student.css">
</head>
<body>





<div class="div1" > B.Tech     <B>STUDENTS  4</B><sup>th year</sup>	</div>

<?php  

    include("config.php");
 
        
   



$sql = "SELECT * FROM student where year='4'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row 
    while($row = $result->fetch_assoc()) {  ?>
<div  style=" background-color: #C2C2C3; margin-left: 150px; height: 240px;width: 440px;float: left; margin-top: 40px;box-shadow: 3px 3px 3px 3px gray;">
	

<div style="height: 200px;width: 180px;float: left; margin-top: 15px"><img src="student\<?php  echo $row["name"]; ?>" height="160px;" width="160px;" style="margin-top: 20px; margin-left: 10px;box-shadow: 3px 3px 3px 3px gray" >

	
	</div>
	<div style=" height: 200px; width: 255px;float: right; margin-top: 15px ;box-shadow: 3px 3px 3px 3px gray;background-color: #E5E5E5">
    <b><p style="margin-left: 5px; font-size: 18px; ">NAME:-  <?php  echo $row["username"]; ?></p></b><b><p style="margin-left: 5px; font-size: 18px; ">Roll No<?php  echo $row["rollno"]; ?></p></b><b><p style="margin-left: 5px; font-size: 18px; "><?php  echo $row["email"]; ?></p></b><b><p style="margin-left: 5px; font-size: 18px; "><?php  echo ucfirst($row["address"]); ?></p></b></div>
	
</div>

<?php
     



      }
} else {
    echo "0 results";
}
 
    ?>


</body>
</html>



