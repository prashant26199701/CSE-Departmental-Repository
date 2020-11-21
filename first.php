<?php

if(isset($_REQUEST["btn"])){

$em= $_REQUEST["email"];
session_start();
$_SESSION["email"]=$em;
header("location:second.php");
}
?>
<html><body>
<form action="<?php $_PHP_SELF ?>" method="post">
<input  type="text" name="email">
<input  type="submit" name="btn" value="login">
</form>

</body></html>