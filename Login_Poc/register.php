<?php
	include "view.php";
	include "users.php";
	$user = new users;
	$id = $user->maxid() + 1;
	View::register($id);
?>