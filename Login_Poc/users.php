<?php
include_once 'db.php';
		class users
		{
			var $id ;
			var $name ;
			var $password;
			var $question;
			var $answer;
			var $db;
			function __construct( )
			{
				$db = new DB;
				if(!$db->select_db())
				die("cannot select db");
			}
			function retrive($name)
			{
				
				$sql="SELECT * FROM `users` where name = '$name'";
				$result = mysql_query($sql) or die(mysql_error());
				if(mysql_num_rows($result)>0)
				{
					$row=mysql_fetch_assoc($result) or die(mysql_error());
					$this->id = $row['id'];
					$this->name = $row['name'];
					$this->password = $row['password'] ;
				}
				else
				{
					$this->id = null;
					$this->name = null;
					$this->password = null ;
				}
			}
			function select()
			{
				
				$sql="SELECT * FROM `users` where name = '$this->name'";
				$result = mysql_query($sql) or die(mysql_error());
				if(mysql_num_rows($result)>0)
				{
					$row=mysql_fetch_assoc($result) or die(mysql_error());
					$this->id = $row['id'];
					$this->name = $row['name'];
					$this->password = $row['password'] ;
				}
				else
				{
					$this->id = null;
					$this->name = null;
					$this->password = null ;
				}
			}
			function maxid()
			{
				$sql = $sql = "SELECT max(id) FROM `users` ";
				$result = mysql_query($sql) or die(mysql_error());
				return mysql_result($result, 0);
			}
			function update()
			{
				$sql= "UPDATE `users` SET ,`name`='$this->name',`password`='$this->password' where id = $this->id ";
				$result = mysql_query($sql) or die(mysql_error());
			}
			function update_name($name)
			{
				$sql= "update users set name ='$name'" ;
				$result = mysql_query($sql) or die(mysql_error());
			}
			function update_password($pass)
			{
				$pass = md5($pass);
				$sql= "update users set password ='$pass' where id = $this->id ";
				$result = mysql_query($sql) or die(mysql_error());
			}
			function save()
			{
				$sql = "INSERT INTO `php_poc`.`users`(`id`, `name`, `password`) VALUES ($this->id,'$this->name','$this->password')";
				$result = mysql_query($sql) or die(mysql_error());
				//$this->update();			
			}
			function delete()
			{
				$sql = "DELETE FROM `users` where id = $this->id";
				$result = mysql_query($sql) or die(mysql_error());	
			}
			
			
		}
 
 
	
 
?>