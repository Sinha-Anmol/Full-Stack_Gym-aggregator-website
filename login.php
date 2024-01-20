<?php
session_start(); 
include "db_conn.php";?>

<?php 
     if(isset($_POST['login'])){
          $Contact=$_POST['Contact'];
          $Password=$_POST['Password'];
          $sql = "SELECT * FROM user WHERE  Contact='$Contact' AND Password='$Password'";   //unique
		$result = mysqli_query($conn,$sql);
        $fetch=mysqli_fetch_array($result,MYSQLI_BOTH);
        
		if (mysqli_num_rows($result) > 0) {
             $_SESSION['user_id']=$fetch['id'];
        
             header("location:index.php");
          }else {
               echo 'ERROR: Check Contact and Email';

     }
} 
           ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<form method="POST">
  <div class="form-group">
    <label for="exampleInputContact">Contact</label>
    <input type="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Contact" name="Contact">
    <small id="emailHelp" class="form-text text-muted">We'll never share your contact with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="Password">
  </div>
 
  <button type="submit" class="btn btn-primary" name="login">Submit</button>
  <button><a href="index.php">Home</a></button>
</form>
</body>
</html>