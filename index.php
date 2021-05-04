<?php include_once('inc/conn.php');

if (!empty($_SESSION["loggedin"])) {
		require_once './dashboard.php';
	} else {
		require_once './login.php';
	}
?>