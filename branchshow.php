
 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<?php
    include 'header.php';
 
    include("config.php");
 
    if(isset($_POST['but_upload'])){
        $name = $_FILES['file']['name'];
 session_start();
$Email=$_POST["but_upload3"];
$_SESSION["em"]=$Email;
$username=$_POST["but_upload5"];
$branch=$_POST["but_upload2"];
$post=$_POST["but_upload1"];
$address=$_POST["but_upload7"];
        $target_dir = "upload/";
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

            $query = "insert into images(name,image,Email,username,branch,post,address) values('".$name."','".$image."','".$Email."','".$username."','".$branch."','".$post."','".$address."')";

           
            mysqli_query($con,$query) or die(mysqli_error($con));
            
            // Upload file
            move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$name);
            



        }

    
    }
    if(isset($_POST['but_upload'])){
    header('location:upload.php');
    exit();
   }
   ?>

	
 <center>  
<div style="text-align: center;width: 360px;height: 410px;box-shadow: 3px 3px 3px 3px grey;  margin-top: 50px;">
  <a href="afterlogin.php"> <div style="float: left;"><button>Back</button></div></a>
        <a href="logout.php"><div style="float: right;"><button>Logout</button></div></a>
    <form method="post" action="" enctype='multipart/form-data'   id="myform"> <h1> !Add Faculty Detail!</h1>
        <br><br>
        <input type='email'  name='but_upload3' placeholder="email" required><br><br>
         <input type='text'  name='but_upload5' placeholder="Faculty Name" required><br><br>
        
       
         <input type='text'  name='but_upload1'  placeholder="post" required><br><br>
          <input type='text'  name='but_upload2'value="Computer Sc.& Engg."><br><br>
           
           
        
      <textarea  name='but_upload7'placeholder="address" required></textarea><br><br>
      <input type='file' name='file' required/><br><br>

       <input type='submit'   name='but_upload'>
    </form>
    
    
    </div>
</center>
</body>

</html>
<?php include 'footer.php'; ?>