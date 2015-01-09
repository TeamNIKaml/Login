<?php
		class Redirect
		{
			public static function direct($page)
			{
				header("Location: $page");
			}
		}
?>