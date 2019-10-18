<?php
class User
{
	public $name, $password;
	
	function __constructor($pName, $pPassword2)
	{
		$name = $pName;
		$password = $pPassword;
	}
	
	function __deconstruct()
	{
		
	}
	
	function save_user()
	{
		echo "Save User code goes here";
	}
}
?>