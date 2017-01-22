<?php 
	
	include('classes/DB.php');

	if (isset($_POST['createaccount'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];

		DB::query('INSERT INTO users VALUES (\'\', :username, :password, :email)', array(':username'=>$username, ':password'=>$password, ':email'=>$email));
		echo 'success';

	}

 ?>

 <h1>Register</h1>

 <form action="create-account.php" method="post">
 	<input type="text" name="username" value="" placeholder="username"><br />
 	 <input type="password" name="password" value="" placeholder="password"> <br />
 	 <input type="email" name="email" value="" placeholder="email"> <br />
 	 <input type="submit" name="createaccount" value="Create Account" >
 </form>