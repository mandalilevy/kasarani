<?php 
session_start();
    if (isset($_SESSION['User'])) {
        
    $con=mysqli_connect("127.0.0.1","root","","kasarani");
    $em=$_SESSION['User'];
    $n=$_POST['nn'];
    $sql="UPDATE `register` SET `pass`='$n' WHERE id='$em'";
        if(mysqli_query($con, $sql)){

        header("Location:apply.php");
        }
        else{
            echo "error";
        }
    }

 ?>


