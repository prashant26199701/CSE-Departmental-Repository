<?php include 'header.php'; ?>
 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<?php
 
    include("config.php");
 
    if(isset($_POST['enter'])){
       

$Email=$_POST["email"];
$btech=$_POST["btech"];
$mtech=$_POST["mtech"];
$phd=$_POST["phd"];
$re1=$_POST["re1"];
$re2=$_POST["re2"];

$re3=$_POST["re3"];

$acadmic=$_POST["acadmic"];
$pub1=$_POST["pub1"];
$pub2=$_POST["pub2"];
$pub3=$_POST["pub3"];


       

        
            // Insert record

            $query = "insert into details(btech,mtech,Email,phd,re1,re2,re3,acadmic,pub1,pub2,pub3) values('".$btech."','".$mtech."','".$Email."','".$phd."','".$re1."','".$re2."','".$re3."','".$acadmic."','".$pub1."','".$pub2."','".$pub3."')";

           
            mysqli_query($con,$query) or die(mysqli_error($con));
            
            // Upload file
            
            



        }

    
    
    if(isset($_POST['enter'])){
    header('location:afterlogin.php');
    exit();
   }
   ?>

	
   <center>

       <div style="width: 400px;height: 750px;box-shadow: 3px 3px 3px 3px grey;  margin-top: 50px;">
          <a href="afterlogin.php"> <div style="float: left;"><button>Back</button></div></a>
        <a href="logout.php"><div style="float: right;"><button>Logout</button></div></a>
   

    <form method="post" action="" enctype='multipart/form-data'   id="myform">
      <h1> !Add Faculty Detail!</h1>

      <input type="email" name="email" placeholder="Email" required><br><br>
      
        <textarea name="btech"placeholder="Btech intitute"></textarea><br><br>
        
         <textarea name="mtech"placeholder="Mtech intitute"></textarea><br><br>
         
          <textarea name="phd"placeholder="Phd institute"></textarea><br><br>
         
           <textarea name="re1"placeholder="research1"></textarea><br><br>
       
            <textarea name="re2"placeholder="research2"></textarea><br><br>
         
             <textarea name="re3"placeholder="research3"></textarea><br><br>
            
              <textarea name="acadmic"placeholder=" acadmic interests"></textarea><br><br>
              
               <textarea name="pub1"placeholder="publication1"></textarea><br><br>
               
                <textarea name="pub2"placeholder="publication2"></textarea><br><br>
                
                 <textarea name="pub3"placeholder="publication3"></textarea><br><br>
                 <input type="submit" name="enter" value="Add Details">
    </form>
    
    
    </div></center>

</body>

</html>
<?php include 'footer.php'; ?>