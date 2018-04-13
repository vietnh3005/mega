<?php
	function check_login_user(){
		if(!isset($username))
		{
			header('Location: 404.php');
		}
	}
?>