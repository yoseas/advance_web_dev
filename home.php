<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Login Form</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  
 </head>
 <body>
  <div class="container">
   <br />
   <h2 align="center">Login with Facebook</h2>
   <br />
   <div class="panel panel-default">
    <?php 
    include ('config.php');
     echo '<div class="panel-heading">Welcome</div><div class="panel-body">';
     echo '<h3><b>Name :</b> '.$_SESSION['user_name'].'</h3>';
     echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
     echo '<h3><a href="logout.php">Logout</h3></div>';
    ?>
   </div>
  </div>
 </body>
</html>