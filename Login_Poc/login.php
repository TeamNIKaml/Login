<?php
		include 'message.php';
		include "session.php";
		$session = new Session();
		if ($_POST["name"])
		{
			if($_POST["password"])
			{
				include 'users.php';
				$user = new users;
				$user->retrive($_POST["name"]);
				DB::db_close();
							
				if($user->name == $_POST["name"] && $user->password == md5($_POST["password"]))
				{
					$session->login($user->name);								
				}
				else
				{
					Message::alert("Invalid username or password","index.php");
				}
			}
			else
			{
				Message::alert("please enter password","index.php");
			}
		}
		else
		{
			Message::alert("please enter name","index.php");
		}

?>