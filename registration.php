 <?php include('server.php') ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title> registration</title>
 </head>
 <body>
 
 	<div class="container">
 		<div class="header"> <h2>register</h2></div>
 	</div>

<form action="registration.php" method="post">

<?php include('errors.php') ?>
	<div>
		<label for="username">username</label>
		<input type="text" name="username" required>
	</div>

	<div>
		<label for="email">email</label>
		<input type="email" name="email" required>
	</div>
	
	<div>
		<label for="password">password</label>
		<input type="password" name="password_1" required>
	</div>

	<div>
		<label for="password">confirm password</label>
		<input type="password" name="password_2" required>
	</div>

	<button type="submit" name="reg_user">register</button>

	<p>Already a user? <a href="login.php"><b>login</b></a></p>
</form>

 </body>
 </html>