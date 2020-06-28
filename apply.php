
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>KASARANI CONSTITUENCY</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="bootstrap.css">
 <link rel="stylesheet" href="bootstrap.min.css">
 <link rel="stylesheet" href="bootstrap-reboot.min.css">
 <link rel="stylesheet" href="bootstrap-reboot.css">
  <link rel = "icon" href = "images.png" type = "image/x-icon"> 
</head>
<body class="bg-light">
<div class="container">
 <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
 <div style="float: right">
  <?php 
session_start();

if (isset($_SESSION['User']) ) {
    ?>
    <div class="navbar-nav mr-auto float-left" style=" color: black; text-transform: uppercase;font-weight: bold;font-family: Verdana, Geneva, Tahoma, sans-serif;font-size: 16px ">
        <?php
    echo 'BENEFICIARY NATIONAL ID NUMBER:  &nbsp&nbsp'.$_SESSION['User'].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'; 
    ?>
    </div>  
    <?php
?>
<div style="float: right">
    <?php 
echo '<a href="logout.php?logout" style=" color: white; text-transform: uppercase;font-weight: bold;font-family: Verdana, Geneva, Tahoma, sans-serif;font-size: 16px;text-decoration:none">LOG OUT</a>';
     ?>
   <div class="card-link align-right" style="text-transform: uppercase; float: left; padding-right: 20px; padding-left: auto;font-family: Verdana, Geneva, Tahoma, sans-serif;">
   <a href="customer_update.php" style=" color: white; text-transform: uppercase;font-weight: bold;font-family: Verdana, Geneva, Tahoma, sans-serif;font-size: 16px;text-decoration: none;" data-toggle="modal" data-target="#exampleModalLong">Reset Password  </a>
   </div>
</div>
<?php




}?>
</div>



</nav>
<?php 

 ?>
</div>

<div class="modal fade bg-primary" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">UPDATE PASSWORD</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form action="up.php" method="post">
  <div class="form-group">
    <label for="exampleInputPassword1">New Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="nn"placeholder="Password">
  </div>
  <button type="submit" class="btn btn-success" name="update">Update</button>
</form>
      </div>
      
    </div>
  </div>
</div>


<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-5 col-lg-8 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body" >
              <h5 class="card-title text-center" style="color: blue; font-weight: bolder;">BURSARY APPLICATION</h5>


 <?php 
                 if (@$_GET['Empty']==true)
                 {
                   ?>
                  <div class="card-title alert-light text-danger text-center text-uppercase"><?php echo $_GET['Empty']?></div>
                   <?php 
                 }
               ?>

<?php 
                 if (@$_GET['Invalid']==true)
                 {
                   ?>
                  <div   class="card-title alert-light text-success text-center text-uppercase"><?php echo $_GET['Invalid']?></div>
                   <?php 
                 }
               ?>










<form action="save.php" method="post">
  
    <?php 
    require_once('connection.php');
//session_start();
if (isset($_SESSION['User']) ) {
$query ="SELECT * FROM `register` WHERE id='".$_SESSION['User']."'";
$query_run=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($query_run)) {
  ?>
 <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name"style="font-weight: bold;">FULL NAMES</label>
      <input type="text" class="form-control" id="name" name="nm"  value="<?php echo $row['name'] ?>" readonly="readonly">
    </div>
    <div class="form-group col-md-6">
      <label for="idn"style="font-weight: bold;">PHONE NUMBER</label>
      <input type="text" class="form-control" id="idn" name="idn" value="<?php echo $row['cont'] ?>" placeholder="34828123" maxlength="10" readonly="readonly">
    </div>
    </div>
   
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name"style="font-weight: bold;">GENDER</label>
      <input type="text" class="form-control" id="name" name="gen"  value="<?php echo $row['gender'] ?>" readonly="readonly">
    </div>
    <div class="form-group col-md-6">
      <label for="idn"style="font-weight: bold;">APPLICANT'S REASON</label>
      <input type="text" class="form-control" id="idn" name="res" value="<?php echo $row['reason'] ?>" placeholder="34828123" maxlength="10" readonly="readonly">
    </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name"style="font-weight: bold;">EDUCATION LEVEL</label>
      <input type="text" class="form-control" id="name" name="edd"  value="<?php echo $row['education'] ?>" readonly="readonly">
    </div>
    <div class="form-group col-md-6">
      <label for="idn"style="font-weight: bold;">INSTITUTION</label>
      <input type="text" class="form-control" id="idn" name="ins" value="<?php echo $row['school'] ?>" placeholder="34828123" maxlength="10"readonly="readonly" >
    </div>
    </div>
  <?php  
}
}
 ?>  
   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="rr" style="font-weight: bold;">APPLICATION PERIOD</label>
      <select name="period" id="rr" class="form-control" required="">

        <option>Select Period</option>
        <option>JANUARY-APRIL</option>
        <option>MAY-AUGUST</option>
        <option>SEPTEMBER-DECEMBER</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="scc" style="font-weight: bold;">YEAR OF APPLICATION</label>
       <input type="number" min="1900" max="2099" step="1" class="form-control" name="yrr" value="2020"/>
    </div>
  </div>
 <div class="form-row">
    <div class="form-group col-md-6">
      <label for="ddd" style="font-weight: bold;">DATE</label>
      <input type="date" name="dtt" class="form-control" id="ddd" required="" />
    </div>
    <div class="form-group col-md-6">
      <label for="scc" style="font-weight: bold;">AMOUNT</label>
       <input type="number" class="form-control" name="ammm" value="10000" readonly="readonly" />
    </div>
  </div>
  <div class="form-row">
     <button type="submit" class="btn btn-primary">Apply</button>
  </div>
 
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</body>


</html>
 