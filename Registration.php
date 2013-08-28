<?php

if($_SERVER['REQUEST_METHOD']=="POST")
{
	$fname=$_POST["fname"];
	$sname=$_POST["sname"];
	$add=$_POST["add"];
	$email=$_POST["mail"];
	$pass=$_POST["pass"];
	$confirm=$_POST["confirm"];
	$user= $_POST["user"];
	
	if(!$add || !$email ||!$fname || !$pass || !$sname || !$confirm || !$user)
	{
		echo "Provide all fields";
		exit;	
	}
	if(!preg_match("(/^[a-zA-Z0-9_-]+ {3,16})$/",$user))
	{
		echo "Enter the correct username<a href='login.php'>Click Here</a>";
		exit;
	}
	if(!preg_match("/^[a-zA-Z0-9_\.-]+)@([a-zA-Z0-9\_\.-]+)\.([a-z\.]{3,6})$/",$email))
	{
		echo "Email should be in this format brokenfell@gmail.com <a href='Registration.php'>Click Here</a>";
		exit;
	}
	
	if($pass!=$confirm)
	{
		echo "Passwords should be the same";
		exit;
	}
	else
	{	
		echo "account created succefully <a href='login.php'>Click Here</a>";
		exit;
	}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registration Page</title>
<style type="text/css">

body,td,th {
	color: #6699FF;
}
.style1 {
	color: #990033;
	font-size: xx-large;
}
.style3 {
	color: #330066;
	font-weight: bold;
}
.style5 {color: #990099; font-weight: bold; }
.style9 {color: #990066; font-weight: bold; }
.style11 {color: #990033; font-weight: bold; }
.style12 {color: #990000}
.style13 {color: #990033}
body {
	background-color: #FF99CC;
}
-->
</style></head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p> &nbsp;</p>
  <p align="center" class="style1">Registration Page </p>
  <div align="center">
  <table width="282" border="1">
    <tr>
      <td width="97"><span class="style9">First Name </span></td>
      <td width="169"><input type="text" name="fname" /></td>
    </tr>
    <tr>
      <td><span class="style9">Surname</span></td>
      <td><input type="text" name="sname" /></td>
    </tr>
    <tr>
      <td><span class="style9">email</span></td>
      <td><input type="text" name="mail" /></td>
    </tr>
    <tr>
      <td><span class="style9">Password</span></td>
      <td><input type="password" name="pass" /></td>
    </tr>
    <tr>
      <td><span class="style3"><span class="style12">Re-enter </span><span class="style13">password</span> </span></td>
      <td><input type="password" name="confirm" /></td>
    </tr>
    <tr>
      <td><span class="style11">Phone Number</span> </td>
      <td><input type="text" name="phone" /></td>
    </tr>
	<tr>
      <td><span class="style11">UserName</span> </td>
      <td><input type="text" name="userName" /></td>
    </tr>
    <tr>
      <td height="45"><span class="style11">Address</span></td>
      <td><textarea name="add"></textarea></td>
    </tr>
    <tr>
      <td><span class="style9">Gender</span></td>
      <td><input name="radiobutton" type="radio" value="male" />
        <span class="style9">Male        </span>
        <input name="radiobutton" type="radio" value="female" />
        <span class="style5">        Female</span></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit" />
      <input type="reset" name="Submit2" value="Clear" /></td>
    </tr>
	
  </table>
  </div>
</form>
</body>
</html>
