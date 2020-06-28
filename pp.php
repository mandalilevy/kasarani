<?php 
require_once('connection.php');
session_start();
if (isset($_POST['submit'])) 
{
if (empty($_POST['name']) || empty($_POST['pass']))
  {
	header("Location:admin_login.php?Empty=please fill in the blanks");
  }
else
{
$query ="SELECT * FROM `login` WHERE user='".$_POST['name']."' AND pass='".$_POST['pass']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
	$_SESSION['User']=$_POST['name'];
	$_SESSION['nnn'];
	header("Location:registered_list.php");
}
else{
	header("Location:admin_login.php?Invalid= Username and Password do not match");
}
}
}
else
{
	echo "NOT WORKING NOW";
}
 ?>
