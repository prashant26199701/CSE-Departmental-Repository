
<?php
   ob_start();
   session_start();
   include 'header.php';
?>

<

<html lang = "en">
   
   <head>
      <title>Tutorialspoint.com</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      
      <style>
         h2{
            text-align: center;
            color: #017572;
         }
      </style>
      
   </head>
	
   <body>
      
      <center>      <div style="width: 300px; height: 200px;box-shadow: 3px 3px 3px 3px grey;">
         <h2>Login Here!!</h2> 
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'n_badal@knit.ac.in' && 
                  $_POST['password'] == 'n_badal') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'n_badal@knit.ac.in';
                 header('location:afterlogin.php');
                  
                 
               }else {
                  $msg = 'Wrong username or password';
               }
               
            }

         ?>
      <!-- /container -->

      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "email" class = "form-control" 
               name = "username" placeholder = "email" 
               required ></br><br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password " required><br><br>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
			
         
         
      </div> </center>
      
   </body>
</html>
<?php include 'footer.php'; ?>