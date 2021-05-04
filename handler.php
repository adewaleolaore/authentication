<?php 

	$email = isset($_POST['email']) ? $_POST['email'] : "";
	$password = isset($_POST['password']) ? $_POST['password'] : "";
	$action = isset($_POST['action']) ? $_POST['action'] : "";

	if($action == "signin") {
		$signin = new Signin;
	}
	if($action == "signup") {
		$signup = new SignUp;
		var_dump('signup');
	}
	
	//var_dump($signin);