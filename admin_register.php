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
<body>
 <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#" style="color: white; font-family:Verdana">KASARANI CONSTITUENCY</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav  mt-lg-0 mx-auto ">
      <li class="nav-item" >
        <a style="color: white; font-family:Verdana" class="nav-link" href="admin.php">HOME</a>
      </li>
    
     
    </ul>
 
  </div>
</nav>
<div class="container">
<div class="row">
      <div class="col-sm-9 col-md-5 col-lg-10 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body" >
              <h5 class="card-title text-center" style="color: blue; font-weight: bolder;">ADMINISTRATOR REGISTRATION</h5>


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

<form action="adminpost.php" method="post">
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4" style="font-weight: bold;">EMAIL ADDRESS</label>
      <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="xxx.gmail.com" required="">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4" style="font-weight: bold;">PASSWORD</label>
      <input type="password" class="form-control" id="inputPassword4" name="pass" placeholder="Password" required="">
    </div>
  </div>
  <div class="form-row">
     <button type="submit" class="btn btn-primary">Register</button>
  </div>
 
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</body>

<?php

?>


</html>
