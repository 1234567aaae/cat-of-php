<?php
session_start();
require_once "config.php";
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
    <form action="signup.php" method="post" class="px-3">
        <br>
        <br>
        <br>
       <b> connect to Facebook <b>
        <br>
        <br>
        <br>
        <br>
        <br>

     
        

<button type="submit" class="btn btn-primary text-center form-control border-0" style="border-radius:50px 50px 50px 50px;">
<i class="fa fa-facebook" aria-hidden="true"></i>
                    continue with Facebook
                </button>
                

      <br>
      <br>
      <br>

    </form>
    </div>
</div>