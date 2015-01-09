<?php
		include_once "session.php";
		include "view.php";
		$session = new session;
		if(!isset($_SESSION['login']))
		{
			
			$session->logout();
		}
		View::menu();
		View::background_image("resources\BACK.JPG");
		View::home_message($_SESSION['login'] );
		
?>