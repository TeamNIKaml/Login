<?php
//include "redirect.php";
//include 'message.php';
		class Session
		{

			function __construct( )
			{
				if(!isset($_SESSION))
					{
					session_start();
					}
			}
			public function login($name)
			{
				echo "login called";
				$_SESSION['login'] = $name;
				header("Location:home.php");
			}
			public function logout()
			{
				session_destroy();
				header("Location:index.php");
			}
		}
?>
