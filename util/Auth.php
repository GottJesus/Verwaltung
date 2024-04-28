<?php
class Auth
	{
		public static function handleLogin()
		{
			session_set_cookie_params(604800); // eine Woche für die session	cookie
			session_start();
			$logged = $_SESSION['loggedIn'];
			
			if($logged == false)
			{
				session_destroy();
				header('location:'.URL.'login');
				exit;
			}
		}
	}
?>