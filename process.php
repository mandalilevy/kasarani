<?php 
require_once('connection.php');
session_start();
if (isset($_POST['submit'])) 
{
if (empty($_POST['name']) || empty($_POST['pass']))
  {
	header("Location:login.php?Empty=please fill in the blanks");
  }
else
{
$query ="SELECT * FROM `register` WHERE id='".$_POST['name']."' AND pass='".$_POST['pass']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
	$_SESSION['User']=$_POST['name'];
	$_SESSION['nnn'];
	header("Location:apply.php");
}
else{
	header("Location:login.php?Invalid= Username and Password do not match");
}
}
}
else
{
	echo "NOT WORKING NOW";
}
 ?>
