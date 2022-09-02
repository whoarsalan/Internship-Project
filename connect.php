<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "college";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password,"college");
  
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  else{
    // echo"yes";
  }

 
?>