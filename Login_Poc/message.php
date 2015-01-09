<?php
		class Message
		{
			public static function alert($message,$page)
			{		
				echo "<script type='text/javascript'>
				alert('$message');
				window.location.assign('$page');
				</script>";
			}
		}
?>