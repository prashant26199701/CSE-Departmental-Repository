<!doctype html>
<html>
<head>
	<style>
img {
  border-radius: 0%;
  margin-top: 50px;
  margin-left: 10px;

}



.column {
 float: left;
  width: 218px;
  margin-top: 60px;
margin-left: 170px;
height: 393px;
box-shadow: 3px  3px  3px 3px #888888;

background-color: white;


border: none;


}
.row::after {
  content: "";
  clear: both;
  display: table;
}
.imge
{

}
.post
{text-align:center;
	margin-top:20px;
	height: 20px;
	width: 187px; 
	
	
}
.branch
{text-align:center;
	margin-top:10px;
	height: 20px;
	width: 187px;
	padding-left: 10px; 
	
	
}
.id1
{
	
	margin-top: -33px;
	margin-left: 5px;


}
.rowname
{
	height: 20px;
	width: 187;
text-align: center;
	margin-top:  10px;
  src: url(sansation_light.woff); 
  font-family: Arial, Helvetica, sans-serif;
}

* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  height: 186px;
  position: ;
  
  margin-right: 150px;
	margin-left: 150px;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 0%;
  display: none;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .0} 
  to {opacity: 0.0}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 0px}
}
</style>


	<link rel="stylesheet" type="text/css" href="index.css"> 
</head>
<body>
<style type="text/css">
.faculty
{
	height: 50px;
	width: 1029px;
	margin-left: 150px;
	background-color: blue;
	margin-top: 50px;
	text-align: center;
	font-size: 40px;
}



</style>
</head>
<body>





<?php
   include 'header.php';
    include("config.php");?>
 
        <div  style="margin-left: 150PX;width: 1029px; height: 40px;background-color: rgb(0,112,223);font-size: 30px; text-align: center;margin-top: 50px;
">  <B>Faculty Details</B> 
</div>
   

<?php 

$sql = "SELECT * FROM images";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row 
    while($row = $result->fetch_assoc()) {  ?>
    	<form action="" method="get" enctype="multipart/">

<a href=" faculty.php?id=<?php  echo $row["Email"]; ?>"><div class="column">
	

    	<tr style="background-color:#E5E5E5 ">
    		

<div class="id1"> <img src="<?php  echo $row["image"]; ?>" height="250px" width="187px" > </div>
<div style="background-color:#E5E5E5>
<div class="rowname"><b>  <?php  echo ucfirst($row["username"]); ?></b></div>
<div class="post">  <b><?php  echo ucfirst($row["post"]); ?></b></div>
<div class="branch">  <b><?php  echo  ucfirst($row["branch"]); ?></b></div>

</div>
    	</tr>

    
</div></a>
</form>
       
<?php
     



      }
} else {
    echo "0 results";
}
 
    ?>

</body>
</html>


