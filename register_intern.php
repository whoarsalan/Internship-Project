<?php 
session_start();
include('dbconnect.php');
$employer=$_GET['employer'];
$title=$_GET['title'];
$usname=$_SESSION['username'];
$query="SELECT * FROM internships WHERE employer='$employer' AND title='$title'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
 ?>
 <!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<script src="assets/js/jquery-3.2.0.min.js"></script>
		<script src="js/bootstrap.js"></script>
    	<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
<body>

<div class="jumbotron" style="width:70%; margin:0 auto;">
  
  <p class="text-info" style="font-size: 60px;"> Applying for </p>
  <div class="well well-lg bg-info">
  <p><strong>Employer: </strong><?php echo $row['employer']; ?></p>
    <h4><strong>Title: </strong><?php echo $row['title']; ?></h4>
    <p><strong>Description: </strong><?php echo $row['description']; ?></p>
    <p><strong>Stipend: Rs. </strong><?php echo $row['stipend']; ?></p>
  <?php 
  mysqli_close($conn);
  ?>
</div>
<form class="form-horizontal" action="register_intern-inc.php" method="post">
<input type="hidden" name="title" value="<?php echo $row['title']; ?>">
  <div class="form-group">
    <label class="col-sm-2 control-label">Name:</label>
    <div class="col-sm-8">
      <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Name">
    </div>
  </div>
   <div class="form-group">
    <label class="col-sm-2 control-label">Email: </label>
    <div class="col-sm-8">
      <input type="text" name="email" class="form-control" id="inputEmail3" placeholder="Your e-mail">
    </div>
  </div>
   <div class="form-group">
    <label class="col-sm-2 control-label">Employer:</label>
    <div class="col-sm-8">
      <input type="text" name="employer" class="form-control" id="inputEmail3" value="<?php echo $row['employer']; ?>">
    </div>
  </div>
  <button class="btn btn-success btn-lg" name="loginBtn" style="position: relative; left:420px;">Apply</button>
</div>
</body>
</html>