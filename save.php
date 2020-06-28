
<?php
session_start();
if (isset($_SESSION['User']) ) {
$con=mysqli_connect("127.0.0.1","root","","kasarani");
$query ="SELECT * FROM `application` WHERE period='".$_POST['period']."' AND year='".$_POST['yrr']."' AND id='".$_SESSION['User']."' ";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
	
header("Location:apply.php?Empty=You already applied for this period!!");
	
}
else{
$_SESSION['nnn']=$_POST['nm'];
$sql="INSERT INTO `application`(`id`,`name`, `cont`, `gender`, `reason`, `education`, `institution`, `period`, `year`, `date`, `amount`) VALUES('".$_SESSION['User']."','".$_POST['nm']."','".$_POST['idn']."','".$_POST['gen']."','".$_POST['res']."','".$_POST['edd']."','".$_POST['ins']."','".$_POST['period']."','".$_POST['yrr']."','".$_POST['dtt']."','".$_POST['ammm']."')";

if(mysqli_query($con, $sql)){
header("Location:apply.php?Invalid=Successfully Applied!!");
}

}

}







 ?>