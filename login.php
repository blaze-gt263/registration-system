  <?php include('server.php') ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title> registration</title>
 </head>
 <body>
 
 	<div class="container">
 		<div class="header"> <h2>Login</h2></div>
 	</div>

<form action="login.php" method="post">

	<div>
		<label for="username">username</label>
		<input type="text" name="username" required>
	</div>
	
	<div>
		<label for="password">password</label>
		<input type="password" name="password_1" required>
	</div>


	<button type="submit" name="login ">login</button>

	<p>Already a user? <a href="registration.php"><b>login</b></a></p>
</form>

 </body>
 </html>