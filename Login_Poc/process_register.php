<?php
		include "message.php";
		
		if ($_POST["name"])
		{
			if($_POST["password"])
			{
				include 'users.php';
				$user = new users;
				$user->retrive($_POST["name"]);
				if($user->id)
				{
				Message::alert("Username Exists please enter another name","register.php");
				}
				else
				{
					include_once "forgot_password.php";
					$user->id = $_POST['id'];
					$user->name = $_POST['name']; 
					$user->password = md5($_POST['password']); 
					$user->save();
					$password = new Forgot_Password;
					$password->id = $_POST['id'];
					$password->question = $_POST['question'];
					$password->answer = $_POST['answer'];
					$password->save();
					DB::db_close();
					
					
					
					
					Message::alert("Sucessfully Registered","index.php");
					
				}
				
				
			}
			else
			{
				Message::alert("please enter password","index.php");
			}
		}
?>