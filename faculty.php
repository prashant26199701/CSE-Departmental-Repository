



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
</style>


	<link rel="stylesheet" type="text/css" href="index.css"> 
	<link rel="stylesheet" href="https://unpkg.com/@coreui/icons@1.0.0/css/all.min.css">
<link rel="stylesheet" href="https://unpkg.com/@coreui/icons@1.0.0/css/free.min.css">
<link rel="stylesheet" href="https://unpkg.com/@coreui/icons@1.0.0/css/brand.min.css">
<link rel="stylesheet" href="https://unpkg.com/@coreui/icons@1.0.0/css/flag.min.css">


<body>
	<style type="text/css">


.fachead
{
	width:1029px;
	height: 300px;
	border-style: groove;
	border:none;
	margin-left: 150px;
	margin-top: 50px;
	background-color: rgb(0,112,223);
	text-decoration-color: white;
}
.namepost
{
	float: left;
width: 250px;
margin-left: 30px;
	height: 187px;
	margin-top: 90px;
     color: white;
   
}
.facheadpic
{
border-radius: 300%;
	float: left;
	margin-top: 50px;
	margin-left: 20px;
	width: 200px;
	height: 187px;
	
	

	
}.facheadname
{
	margin-left:0px;
	margin-top: 20px;
	float: left;
    width: 250px;
	height: 30px;
	font-size: 20px;
	
}
.bemail
{
font-size: 15;
color: white;
	float: left;
     width: 250px;
    margin-left: 10px;
	height: 250px;
	margin-top: 50px;
	
	
}
.glyph
{
	margin-top: 27px;
	float: left;
	 width: 50px;
	height: 200px;
	margin-left: 50px;
	

}
.glyf
{


color: white;
	float: left;
     width: 100px;
    margin-left: 15px;
	height: 187px;
	margin-top: 45px;
	
	
}
.facheadbranch
{

	font-size: px; 
	margin-top: 10px;
	margin-left: 0px;
	width:250px;
	
}.facheademail
{

	font-size:px;
	margin-top: 33px;
	margin-left: 0px;
	width: 250px;
	height: 30px;
	
}
.facheadadd
{

	font-size: px;
	
	margin-top:30px;
	margin-left: 0px;
	width: 250px;
	height: 100px;
	
	
}.facheadpost
{
margin-left: 20px;
	margin-top: 30px;
	float:right;
	font-size: 20px;
    width: 250px;
	height: 30px;

	
}
i{
	font-size: 40px;
}
.prpic
{
	border-radius: 150px;
	width: 170px;
	height: 200px;

}


.glyph2
{

  margin-top: 36px;
	float: left;
	 width: 20px;
	height: 200px;
	
	margin-left: 0px;

}


</style>




<?php
include 'header.php';
 include("config.php");


$Email=	$_REQUEST["id"];



$sql = "SELECT *  FROM images where Email='$Email'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row 
   WHILE ($row = $result->fetch_assoc()) {
?>
    
	


       
<div class="fachead">
	

	<div class="facheadpic"><img  class="prpic" src="<?php  echo $row["image"]; ?>"  ></div>
	<div class="namepost">
	<div class="facheadname"><?php  echo $row["username"]; ?></div>
	<div class="facheadpost"><?php  echo $row["post"]; ?></div>

	
	</div>
	<div class="glyph"><br><i class="cib-googles-cholar"></i><br><br><i class="cil-envelope-closed"></i><br><br><i class="cil-location-pin"></i></div>
<div class="glyf">
	<b>
	<p>Department </p><br>
<font>Email </font><br><br><br>
<font>Address   </font>
</b>
</div>
<div class="glyph2"><br>__<br><br><br>__<br><br><br>__</div>

	<div  class="bemail">
		<div class="facheadbranch"><?php  echo ucfirst($row["branch"]); ?></div>
		<div class="facheademail">
<?php  echo strtolower($row["Email"]); ?></div>
		<div class="facheadadd"> <?php  echo ucfirst($row["address"]); ?></div>


	</div>
</div>






  <?php     

}

      
} else {
    echo "0 results";
}
 
    ?>


<?php




$sql = "SELECT *  FROM details where Email='$Email'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row 
   WHILE ($row = $result->fetch_assoc()) {
?>
    
	




<div style="height: auto;width: 900px;  margin-left: 150px; margin-top: 20px;box-shadow: 3px  3px  3px 3px #888888;"><div style="width: auto; height: auto;float: left;  font-size: 30px;box-shadow: 3px  3px  3px 3px #888888;">Education</div> <br><br><br><b><?php  echo ucfirst($row["btech"]); ?><br><?php  echo ucfirst($row["mtech"]); ?><br><?php  echo ucfirst($row["phd"]); ?> </b></div>


<div style="height: auto;width: 900px; margin-left: 150px; margin-top: 20px;box-shadow: 3px  3px  3px 3px #888888;"><div style="width: auto; height: auto;float: left;  font-size: 30px;box-shadow: 3px  3px  3px 3px #888888;">Research Experience</div><br><br><br><b><?php  echo ucfirst($row["re1"]); ?><br><?php  echo ucfirst($row["re2"]); ?><br><?php  echo ucfirst($row["re3"]); ?> </b></div>


<div style="height: auto;width: 900px; margin-left: 150px; margin-top: 20px;box-shadow: 3px  3px  3px 3px #888888;"><div style="width: auto; height: auto;float: left; font-size: 30px;box-shadow: 3px  3px  3px 3px #888888;">Acadmic Interests</div><br><br><br><b><?php  echo ucfirst($row["acadmic"]); ?></b></div>


<div style="height: auto;width: 900px;  margin-left: 150px; margin-top: 20px;box-shadow: 3px  3px  3px 3px #888888;"><div style="width: auto; height: auto;float: left;  font-size: 30px;box-shadow: 3px  3px  3px 3px #888888;">Publications</div><br><br><br><b><?php  echo ucfirst($row["pub1"]); ?><br><?php  echo ucfirst($row["pub2"]); ?><br><?php  echo ucfirst($row["pub3"]); ?> </b></div>



  <?php     

}

      
} else {
    echo "0 results";
}
 

    ?>



</body>
</html>
<?php include 'footer.php'; ?>



 