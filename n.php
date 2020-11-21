
 
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

/*--- we created a variables to display the error message on design page ------*/
  $error = "";

  if (isset($_POST["but_upload"]) == "Upload")
  {
    $file_tmp = $_FILES["file"]["tmp_name"];
    $file_name = $_FILES["fileImg"]["name"];

    /*image name variable that you will insert in database ---*/
    

    //image directory where actual image will be store
    $file_path = "student/".$file_name; 

  /*---------------- php textbox validation checking ------------------*/
  if($name == "")
  {
    $error = "Please enter Image name.";
  }

  /*-------- now insertion of image section has start -------------*/
  else
  {
    if(file_exists($file_path))
    {
      $error = "Sorry,The <b>".$file_name."</b> image already exist.";
    }
      else
      {
        $query = "insert into student(name,image,email,year,rollno,address,username) values('".$name."','".$image."','".$Email."','".$year."','".$rollno."','".$address."','".$username."')";
        $error = "<p align=center>File ".$_FILES["fileImg"]["name"].""."<br />Image saved into Table.";
      }
    }
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