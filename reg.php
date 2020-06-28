
<?php
session_start();
$con=mysqli_connect("127.0.0.1","root","","kasarani");

$name=$_POST['nm'];
$idn=$_POST['idn'];
$phone=$_POST['pno'];
$pass=$_POST['ps'];
$query ="SELECT * FROM `register` WHERE id='".$_POST['idn']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
	
header("Location:register.php?Empty=You already Registered into the system!!");

	
}
else{
$_SESSION['nnn']=$_POST['nm'];
$sql="INSERT INTO `register`(`name`, `id`, `date`, `gender`, `reason`, `education`, `school`, `place`, `cont`, `pass`) VALUES('$name','$idn','".$_POST['date']."','".$_POST['cat']."','".$_POST['rr']."','".$_POST['ed']."','".$_POST['nms']."','".$_POST['pbb']."','$phone','$pass')";

if(mysqli_query($con, $sql)){
header("Location:register.php?Invalid=Successfully Registered!!");
}

}









 ?>