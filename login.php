<?php session_start(); ?>
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

<div class="login-form well well-lg">
	<h1 class="text-center">LOGIN</h1>
	<form role="form" action="logincheck.php" method="post">
	<div class="input-group" style="position: relative; top: 28px;">
  <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
  <input type="text" name="username" class="form-control" placeholder="Username" aria-describedby="basic-addon1">

</div>
	<div class="input-group" id="pwdfield">
  <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-filter"></span></span>
  <input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
</div>
<button type="submit" class="btn btn-info btn-block" id="loginbtn">Log In</button>
<a role="button" href="signup" class="btn btn-info btn-block" id="loginbtn2">Sign Up</a>
	</form>
</div>
</body>
</html>