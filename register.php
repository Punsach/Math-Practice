<?php 
session_start();

$_SESSION('')
$username;
$password; 

$encryptedPassword = $password = Hash::make($password);

DB::insert('insert into Users (Username, Password) values (?, ?)', [$username, $password]);
$user = $username
header('Location: /welcome.blade.php');
?>