<?php
include 'message.php';
include 'users.php';
if ($_POST["password1"])
	{
		if($_POST["password2"])
		{
			if($_POST["password1"]!=$_POST["password2"])
			 {
				Message::alert("Password did not match","forgot_password.php");
			 }	
			else
			{
			$user = new users;
			$user->id = $_POST['id'];
			$user->update_password($_POST['password1']);
			DB::db_close();
			Message::alert("Password updated Sucessfully","index.php");
			}
		}
		else
		{
		Message::alert("please confirm your new password","forgot_password_view.php");
		}
	}
		else
		{
				Message::alert("please enter your new password","forgot_password_view.php");
			
		}

?>