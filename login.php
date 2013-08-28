<?php
session_start();
if($_POST['submit']){
	if(isset($_POST['username'])&& isset($_POST['password']))
	{
		
		header("Location: index.php");
		die();
	}
	
	 include_once('user.class.php');
	
	$username = trim($_REQUEST['username']);
	$password = trim($_REQUEST['password']);
	$user = new User($username,"booshhof@gmail.com");	
	$user->setPassword($password);
	
	
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password ;
	
	print($_SESSION['username']."<br />".$_SESSION['password'] );

	}
	else {
	echo "Please enter a valid username";
	}	
?>
	
<html>
	<title></title>
	<style type="text/css">
<!--
body {
	background-color: #FF99CC;
	border: #FFFF66;
}
-->
    </style><body>
	<form action="login.php" method="post">
      <div align="center">
        <table>
          <tr>
            <td>Enter username:</td>
            <td><input type="text" name="username"/></td>
          </tr>
          <tr>
            <td>Enter password :</td>
            <td><input type="text" name="password"/></td>
          </tr>
          <tr>
            <td><input type="submit" value="Sign In" name="submit"/></td>
          </tr>
              </table>
      </div>
	</form>

</body>
</html>
 

