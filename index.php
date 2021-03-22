<!DOCTYPE html>
<?php
include('config.php');
?>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
		<div class="login-content">
			<form action="login_proses.php" method="post">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<input type="text" name="id" class="input" placeholder="Username">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<input type="password" name="pw" class="input" placeholder="Password">
            	   </div>
            	</div>
                <?php 
				if(isset($facebook_login_url)){
				echo $facebook_login_url;
				}else{
				header('location: home.php');
				}
				?>
            	<input type="submit" class="btn" value="Login">                
            </form>
        </div>
    </div>
</body>
</html>