<?php
		include_once "db.php";
		class Forgot_Password
		{
			var $id;
			var $question;
			var $answer;
			var $db;
			function __construct( )
			{
			
			$db = new DB;
				if(!$db->select_db())
				die("cannot select db");
			}
			function maxid()
			{
				$sql = $sql = "SELECT max(id) FROM `forgot_password` ";
				$result = mysql_query($sql) or die(mysql_error());
				return mysql_result($result, 0);
			}
			function select_id($id)
			{
		
				$sql="SELECT * FROM `forgot_password` where id = $id";
				$result = mysql_query($sql) or die(mysql_error());
				if(mysql_num_rows($result)>0)
				{
					$row=mysql_fetch_assoc($result) or die(mysql_error());
					$this->id= $row['id']; 
					$this->question= $row['question']; 
					$this->answer= $row['answer'];			
				}
				else
				{
					$this->id= null;
					$this->question= null;
					$this->answer= null;			
				}
			}
			function update()
			{
			
				$sql ="UPDATE `forgot_password` SET `question`='$this->question',`answer`='$this->answer'   where id = $this->id";
			
				$result = mysql_query($sql) or die(mysql_error());
			}
			function save()
			{
				$sql = "INSERT INTO `php_poc`.`forgot_password`(`id`, `question`, `answer`) VALUES ($this->id,'$this->question','$this->answer')";
				$result = mysql_query($sql) or die(mysql_error());
				//$this->update();
			
			}
			function delete()
			{
				$sql = "DELETE FROM `forgot_password` where id = $this->id";
				$result = mysql_query($sql) or die(mysql_error());	
			}
		}
?>