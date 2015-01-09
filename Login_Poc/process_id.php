<?php	
	include "message.php";
	if(isset($_POST['id']))
	{
		include "forgot_password.php";
		$password = new Forgot_password;
		$password->select_id($_POST['id']);
	
		if($password->id)
		{
			include "view.php";
			View::display_question($password->question,$password->id);
		}
		else
		{
			Message::alert("invalid id","security_question.php");
		}
	}
	else
	{
		
		Message::alert("please enter the id","security_question.php");
	}
	
?>