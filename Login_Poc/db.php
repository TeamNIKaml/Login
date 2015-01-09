<?php

	class DB
	{
		var $db;
		function __construct( )
		{
		$this->db=mysql_connect("localhost", "root", "") or die(mysql_error()); 
		}
		
		function select_db()
		{
			return mysql_select_db("php_poc",$this->db) or die(mysql_error());
		}
		public Static function db_close()
		{
			mysql_close();
		}
		
		
	
	}
	
?>