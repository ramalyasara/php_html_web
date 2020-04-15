<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
  if(isset($_SESSION['username'])){
?>

<div class="container" style="width:450px;margin-top:50px;">
  <h1>Hi <?= $_SESSION['username'];?></h1>
  
  <div class="form-group">
    <div class="modal-header"><h4><a href="logout.php">Logout</a></h4></div>
    <div class="modal-header"><h4><a href="profile.php">Profile</a></h4></div>
  </div>
</div>
</body>

<?php
}
  else
    header('Location: home1.html');
?>