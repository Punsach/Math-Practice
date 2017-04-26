<?php 


	$username = htmlentities($_POST['user']);
	$password = htmlentities($_POST['pass']);
	$hashedpassword = password_hash($password,PASSWORD_DEFAULT);

	DB::insert('insert into Users (Username, Password, Score) values (?, ?, ?)', [$username, $password, 0]);


?>