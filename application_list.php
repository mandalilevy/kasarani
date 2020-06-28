

<?php 
if (isset($_POST['search'])) {
 $valuetosearch=$_POST['valuetosearch'];
 $query ="SELECT * FROM `application` WHERE CONCAT(`id`, `name`, `cont`, `gender`, `reason`, `education`, `institution`, `period`, `year`) LIKE '%".$valuetosearch."%'";
 $search_result=filtertable($query);
}
else{
$query="SELECT * FROM `application` ORDER BY `date`";
$search_result=filtertable($query);
}
function filtertable($query)
{
$con=mysqli_connect("127.0.0.1","root","","kasarani");
$filter_result=mysqli_query($con,$query);
return $filter_result;
}



 ?>



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
 <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#" style="color: white; font-family:Verdana">KASARANI CONSTITUENCY</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav  mt-lg-0 mx-auto ">
      <li class="nav-item" >
        <a style="color: white; font-family:Verdana" class="nav-link" href="registered_list.php">REGISTERED STUDENTS</a>
      </li>
      <li class="nav-item">
        <a style="color: white; font-family:Verdana" class="nav-link" href="application_list.php">APPLICATION LIST</a>
      </li>
      <li class="nav-item">
        <a style="color: white; font-family:Verdana" class="nav-link" href="admin.php">LOGOUT</a>
      </li>
     
    </ul>
 
  </div>
</nav>
<div  class="table-responsive">

  <center>
<div style="font-size: 25px;font-family:  Verdana, Geneva, Tahoma, sans-serif;text-transform: uppercase;">
<caption >APPLICATIONS</caption>
<hr>
</div>
<div class="container">
  <form action="application_list.php" method="post">
<div class="form-row">
    <div class="form-group col-sm-5">
    <input type="text" name="valuetosearch" placeholder="Search by ID" class="form-control">
  </div>
  <div class="form-group col-sm-1">
    <input type="submit" name="search" value="Search" class="form-control btn-success" style="text-align: center;">
</div>
<div class="form-group col-sm-1 m-auto">
<?php 
$con=mysqli_connect("127.0.0.1","root","","kasarani");
$dddd="SELECT COUNT(id) AS total FROM `application` ";
$query_run=mysqli_query($con,$dddd);
$values=mysqli_fetch_assoc($query_run);
$numr=$values['total'];

 ?>
    <input type="text" name="numm"class="form-control" value="<?php echo $numr ?>" disabled="disabled">

  </div>
</div>
  <table align="center" class="table table-bordered table-sm table-hover">

    <tr style="font-family: times new roman; color: red;">
      <th scope="col">Name</th>
      <th scope="col">ID Number</th>
      <th scope="col">Date</th>
      <th scope="col">Gender</th>
      <th scope="col">Status</th>
      <th scope="col">Education</th>
      <th scope="col">Institution</th>
      <th scope="col">Period</th>
      <th scope="col">Year</th>
      <th scope="col">Amount</th>
      <th scope="col">Contacts</th>
    </tr>
    <?php 
//$con=mysqli_connect("127.0.0.1","root","","kasarani");

while ($row=mysqli_fetch_array($search_result)) {
  ?>
    <tr  style="font-family: Verdana, Geneva, Tahoma, sans-serif; color: black;font-size: 12px;">
      <td><?=$row['name'];?></td>
      <td><?=$row['id'];?></td>
      <td><?=$row['date'];?></td>
      <td><?=$row['gender'];?></td>
      <td><?=$row['reason'];?></td>
      <td><?=$row['education'];?></td>
      <td><?=$row['institution'];?></td>
      <td><?=$row['period'];?></td>
      <td><?=$row['year'];?></td>
      <td><?=$row['amount'];?></td>
      <td><?=$row['cont'];?></td>
    
    </tr>
  <?php } ?>
  </table>
  </form>
  </div>
  </center>
 
 <script src="jquery.js"></script>
    <script type="text/javascript">
       $('input[name="chkDelete"]').click(function () {
    $(this).closest('tr').removeClass('foo');
    if ($(this).is(':checked')) $(this).closest('tr').addClass('foo');
})
    </script>
    <style>
      .foo {
    background: aqua;
}
    </style>


</div>
</body>
</html>