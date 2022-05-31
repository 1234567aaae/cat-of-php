<?php
session_start();
require_once "config.php";


error_reporting(0);
$sql = "SELECT fname, lname, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $_session["fname"]=$row["fname"];
    $_session["lname"]= $row["lname"]; 
    $_session["email"]=$row["email"];
    
  }
} else {
  echo "0 results";
}
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <title>www.irembo.com</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="m-0 bg-primary text-center py-2 text-white" style="bgcolor:blue">
    <strong>IREMBO | pratical CAT</strong>
</div>
<div class="sign-in round">
    <div class="card shadow text-center">
    <form action="logout.php" method="post" class="px-3">
        <br>
        <br>
        <br>
        <img src="images/vainqueur.jpg" class="rounded-circle mx-2" alt="profile image" width="100" height="100" srcset="">
        <br>
        <br>
      
                
        <br>
        <b>
        <?php echo  $_session["fname"]."&nbsp".$_session["lname"]; ?>
</b>
        <br>
        <?php echo $_session["email"]; ?>
        <br>
        <br>
        <br>

<button type="submit" class="btn btn-primary text-center form-control border-0" style="border-radius:50px 50px 50px 50px;">
                    logout
                </button>

      <br>
      <br>
      <br>

    </form>
    </div>
</div>