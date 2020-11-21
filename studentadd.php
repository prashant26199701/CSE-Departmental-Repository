
 
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="student.css">
</head>

<body>
	<?php
 session_start();
    include("config.php");
 
    if(isset($_POST['but_upload'])){
       $name = $_FILES['file']['name'];

$Email=$_POST["email"];
$rollno=$_POST["rollno"];
$year=$_POST["year"];
$address=$_POST["address"];
$username=$_POST["username"];
        $target_dir = "student/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);

        // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");

        // Check extension
        if( in_array($imageFileType,$extensions_arr) ){
            
            // Convert to base64 
            $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
            $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;

            // Insert record

            $query = "insert into student(name,image,email,year,rollno,address,username) values('".$name."','".$image."','".$Email."','".$year."','".$rollno."','".$address."','".$username."')";

           
            mysqli_query($con,$query) or die(mysqli_error($con));
            
            // Upload file
            move_uploaded_file($_FILES['file']['tmp_name'],'student/'.$name);
            



        }

    
    }
    if(isset($_POST['but_upload'])){
    header('location:afterlogin.php');
    exit();
   }
   ?>
   <?php include 'header.php'; ?>

	
   <center>

       <div style="width: 400px;height: 340px;box-shadow: 3px 3px 3px 3px grey;  margin-top: 50px;"> <a href="afterlogin.php"><div style="float: left;"><button>Back</button></div></a>
        <a href="logout.php"><div style="float: right;"><button>Logout</button></div></a>
       
    


    <form method="post" action="" enctype='multipart/form-data'   id="myform">
        <h1>!Add Student!</h1>
<input type='text'  name='username'placeholder='Name'required><br><br>
         <input type='text'  name='rollno'placeholder='Rollno'required><br><br>
          <input type='email'  name='email'placeholder='Email'required><br><br>
       
       
    <input type='text'  name='year'placeholder='Year'required><br><br>
        
           
      
        
        <textarea  name='address'placeholder='address'required></textarea><br><br>
        <input type='file' name='file' ><br><br>
       <input type='submit'   name='but_upload'>
    </form>
    
</div>
   </center>

    
    

</body>

</html>








<?php include 'footer.php'; ?>