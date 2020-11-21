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





<div class="div1">M.Tech   <B>STUDENTS  2</B><sup>nd year</sup>	</div>

<?php  

    include("config.php");
 
        
   



$sql = "SELECT * FROM studentm where year=2";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row 
    while($row = $result->fetch_assoc()) {  ?>
<div  style="margin-left: 120px; height: 250px;width: 500px;float: left; margin-top: 40px;box-shadow: 3px 3px 3px 3px gray;">
	


	<div style="height: 200px;width: 200px;float: left;"><img src="<?php  echo $row["image"]; ?>" height="160px;" width="160px;" style="margin-top: 20px; margin-left: 20px;" >
	<b><p style="margin-left: 25px; font-size: 20px; ">Rahul Yadav</p></b></div>
	<div style=" height: 250px; width: 300px;float: right; "><b><p style="margin-left: 25px; font-size: 20px; ">Rahul Yadav</p></b><br><b><p style="margin-left: 25px; font-size: 20px; ">Rahul Yadav</p></b><br><b><p style="margin-left: 25px; font-size: 20px; ">Rahul Yadav h hs fowheo ooc eihc oihwoic wehr heo heh </p></b></div>
	
</div>

<?php
     



      }
} else {
    echo "0 results";
}
 
    ?>


</body>
</html>



