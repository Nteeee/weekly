<?php
	class User
	{
		private $userName;
		private $eMail; 
		private $password;
		
		//constructor that initializes the instance variables
		function User($userName,$eMail)
		{
			$this->userName = $userName;
			$this->eMail = $eMail;
		}
		
		
		//this password encripts the actual users 
		function setPassword($password)
		{
			$this->password = md5($password);
		}
		
		function displayUserInfo()
		{
			
			return "Username : ".$this->userName."<br/>"."Email address : ".$this->eMail;
			
		}
		
	}
?>