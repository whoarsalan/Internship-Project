<html>
	<head>
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<script src="assets/js/jquery-3.2.0.min.js"></script>
		<script src="js/bootstrap.js"></script>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
<body>
<?php 
include('dbconnect.php');

$query="SELECT * FROM internships WHERE end_date>CURDATE()";
$result=mysqli_query($conn,$query);
?>

<div class="container bg-success" id="content">
 <h1 class="text-primary text-center"> Available Internships </h1>
<?php
	while($row=mysqli_fetch_assoc($result)){

 ?>
	<div class="well bg-info">
  <h4><strong>Employer: </strong><?php echo $row['employer']; ?></h4>
		<h4><strong>Title: </strong><?php echo $row['title']; ?></h4>
		<p><strong>Description: </strong><?php echo $row['description']; ?></p>
		<p><strong>Stipend: Rs. </strong><?php echo $row['stipend']; ?></p>
    <p><strong>Start Date: </strong><?php echo $row['start_date']; ?></p>
    <p><strong>End Date: </strong><?php echo $row['end_date']; ?></p>
		<a role="button" href="login" class="btn btn-block btn-success">Apply</a>
	</div>
	<?php 
	}
	mysqli_close($conn);
	?>
</div>
</body>
</html>