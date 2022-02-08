<?php

//for the class to work, you need to start a session in the usage files. 

class flashMessage
{
	
	// setup flash message
	// string keyword $style, string $message
	// keywords for $style:
	// 				primary
	// 				secondary
	// 				success
	// 				danger
	// 				warning
	// 				info
	// 				light
	// 				dark

	public static function set($style,$message){
		$_SESSION['flash_message'] = "<div class=\"alert alert-$style\">$message</div>";
	}

	// display flash message 
	public static function display(){
		echo $_SESSION['flash_message'];
		unset($_SESSION['flash_message']);
	}

}

?>
