
<?php
session_start();
$con=mysqli_connect("127.0.0.1","root","","kasarani");
$query ="SELECT * FROM `login` WHERE user='".$_POST['email']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
	
header("Location:admin_register.php?Empty=You already Registered into the system!!");

	
}
else{
$_SESSION['email']=$_POST['email'];
$sql="INSERT INTO `login`(`user`, `pass`)  VALUES('".$_POST['email']."','".$_POST['pass']."')";

if(mysqli_query($con, $sql)){
header("Location:admin_register.php?Invalid=Successfully Registered!!");
}

}









 ?>