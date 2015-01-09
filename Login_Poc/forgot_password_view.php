<?php
		include "view.php";
		$id = $_GET['id'];
		echo $id;
		View::forgot_password($id);
?>