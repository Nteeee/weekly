<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
 
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$confirm = $_POST['confirm'];
$mail = $_POST['mail'];
$add = $_POST['add'];
$tel = $_POST['tel'];
$id = $_POST['id'];


if (!$fname||!$sname||!$user||!$pass||!$confirm||!$email||!$add||!$tel||!$id)
 
{
 echo "<h4>please enter all the fields provided <a href='registration.html'> Click Here </a>to try again</h4>"; 
 exit;

}

if (!$fname)
{
 echo "<h4>please enter first name on the space provided</h4>";
 exit;

}
if (!$sname)
{
 echo "<h4>please enter  surname on the space provided</h4>";
 exit;
}

if (!$user)
{
 echo "<h4>please enter  username on the space provided</h4>";
 exit;
}

if (!$pass)
{
 echo "<h4>please enter password on the space provided</h4>";
 exit;
}

if (!$confirm)
{
 echo "<h4>please confirm password on the space provided</h4>";
 exit;
}

if (!$add)
{
 echo "<h4>please enter address on the space provided</h4>";
 exit;
} 

if (!$tel)
{
 echo "<h4>please enter telephone number on the space provided</h4>";
 exit;
}

if (!$id)
{
 echo "<h4>please enter first name on the space provided</h4>";
 exit;
}

if (!$mail)
{
 echo "<h4>please enter first name on the space provided</h4>";
 exit;
}

if ($pass != $confirm)
{
 echo "<h4>the password have to match</h4>";
 exit;
}

if (!preg_match("/[a-zA-Z]{2,}/",$fname))
{
  echo "enter valid information";
  exit;

}

if (!preg_match("/[a-zA-Z]{2,}/",$sname))
{
  echo "enter valid information";
  exit;

}

if (!preg_match("/[a-zA-Z]{2,}/",$user))
{
  echo "enter valid information";
  exit;
}

if (!preg_match("/[a-z0-9]{2,20}/",$add))
{
  echo "enter valid information";
  exit;

}

if (!preg_match("/[a-zA-Z]{2,}/",$fname))
{
 echo "enter valid information";
 exit;
}

if (!preg_match("(0-9)(0-9){3} (0-9){4}",$tel))
{
 echo "data must be numeric and contains 10 numbers";
 exit;
}

if(!preg_match("(0-9){6}",$pass))
{
      echo "data must be numeric and contains 6 numbers";
      exit;

}

if (!preg_match("/[a-zA-Z0-9_\-.\]+@[a-zA-Z0-9\-]\.[a-zA-Z]{3,4}+$/",$mail))
	{
		echo "<h3>you have entered the Invalid email address</h3>";
		exit;
	}
	
	if (!preg_match("[0-9]{13}",$id))
	{
		echo "<h4>ID number must be 13 characters <a href='registration.html'> Click Here</a> to try again</h4>";
		exit;	
	}
?>		
</body>
</html>