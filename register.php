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
        <a style="color: white; font-family:Verdana" class="nav-link" href="index.php">HOME</a>
      </li>
    
     
    </ul>
 
  </div>
</nav>
<div class="container">
<div class="row">
      <div class="col-sm-9 col-md-5 col-lg-10 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body" >
              <h5 class="card-title text-center" style="color: blue; font-weight: bolder;">APPLICANT REGISTRATION</h5>


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













<form action="reg.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name" style="font-weight: bold;">FULL NAMES</label>
      <input type="text" class="form-control" id="name" name="nm"  placeholder="Ruth Wangui" required="">
    </div>
    <div class="form-group col-md-6">
      <label for="idn" style="font-weight: bold;">ID NUMBER</label>
      <input type="text" class="form-control" id="idn" name="idn" placeholder="34828123" maxlength="10" required="">
    </div>
  </div>

 <div class="form-row">
    <div class="form-group col-md-6">
      <label for="dae" style="font-weight: bold;">DATE OF BIRTH</label>
      <input type="date" class="form-control" id="dae" name="date"  required="">
    </div>
    <div class="form-group col-md-6">
        <label for="sc" style="font-weight: bold;">GENDER</label>
       <select class="form-control" name="cat" id="sc">
  <option>Select Gender</option>
  <option>Male</option>
  <option>Female</option>
  </select>
    </div>
  </div>

 <div class="form-row">
    <div class="form-group col-md-6">
      <label for="rr" style="font-weight: bold;">REASON FOR APLICATION</label>
      <select name="rr" id="rr" class="form-control">
        <option>Select Reason</option>
        <option>Total Orphan</option>
        <option>Partial Orphan</option>
        <option>Single Parented</option>
        <option>Needy Family</option>
      
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="scc" style="font-weight: bold;">EDUCATION</label>
       <select class="form-control" id="scc" name="ed">
  <option>Select Education Level</option>
  <option>High School</option>
  <option>College</option>
  </select>
    </div>
  </div>

 <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nms" style="font-weight: bold;">NAME OF SCHOOL</label>
      <input type="text" class="form-control" id="nms" name="nms"  placeholder="Name of School" required="">
    </div>
    <div class="form-group col-md-6">
      <label for="pb" style="font-weight: bold;">PLACE OF BIRTH</label>
      <input type="text" class="form-control" id="pb" name="pbb" placeholder="Kasarani" maxlength="10" required="">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4" style="font-weight: bold;">PHONE NUMBER</label>
      <input type="text" class="form-control" id="inputEmail4" name="pno" maxlength="10"  placeholder="07XXXXXXXX" required="">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4" style="font-weight: bold;">PASSWORD</label>
      <input type="password" class="form-control" id="inputPassword4" name="ps" placeholder="Password" required="">
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
