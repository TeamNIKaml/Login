<?php
include "message.php";
	
	if(isset($_POST['id']))
	{
		include "forgot_password.php";
		$password = new Forgot_password;
		$password->select_id($_POST['id']);
		$answer =	$_POST['answer'];
		if(strcmp($password->answer,$_POST["answer"])==0)
		{
		include "redirect.php";
		Redirect::direct("forgot_password_view.php?id=$password->id");
		}
		else
		{
			Message::alert("invalid answer","security_question.php");
		}
		
		
	}
	else
	{
		
		Message::alert("you should enter answer try again","security_question.php");
	}
?>