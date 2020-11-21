

<!DOCTYPE html>
<html><head>
	<link rel="stylesheet" type="text/css" href="showpic.css"> 
</head>


<body>
	<script type="text/javascript"></script>
	<form action="<?php $_PHP_SELF ?>" method="post">
<input  type="text" name="email">
<input  type="submit" name="btn" value="login">
</form>










<?php
include("config.php");


if(isset($_REQUEST["btn"])){

$em= $_REQUEST["email"];

$_REQUEST["email"]=$em;
header("location:second.php");

$sql = "SELECT name, image, post, branch FROM images";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row 
    while($row = $result->fetch_assoc()) {
?>
    
	
	
	 <form method="post" action="<?php $_PHP_SELF ?>">

<a href="" ><div class="column">
	

    	<tr>
    		

<div class="id1"> <img src="<?php  echo $row["image"]; ?>" height="250px" width="187px" > </div>

<div class="rowname"><b>  <?php  echo $row["name"]; ?></b></div>
<div class="post">  <b><?php  echo $row["post"]; ?></b></div>
<div class="branch" >  <b>    <?php  echo $row["branch"]; ?></b></div>

</div>
    	</tr>

    
</div></a>
<input type="submit" name="btn" value="log"> 

       </form>


   
	
	

 </body>
</html>
<?php }}} ?>

