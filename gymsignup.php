<?php include "db_conn.php";?>
<!DOCTYPE html>
<html>
<head>
	<title>Registeration</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<body>

     <?php 
     if(isset($_POST['gymsignup'])){
          $Contact=$_POST['Contact'];
          $Password=$_POST['Password'];
          $gym_name=$_POST['gym_name'];
          $location=$_POST['location'];
          $Fees=$_POST['Fees'];
          $Address=$_POST['Address'];
          $sql = "SELECT * FROM gym_list WHERE  Contact='$Contact'";   //unique
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
               echo   'User already exist';
          }else {
               $sql2 = "INSERT INTO gym_list(Contact, Password, gym_name ,location,Fees,Address) VALUES('$Contact', '$Password', '$gym_name','$location','$Fees','$Address')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
               echo 'Registration Successful';
          }else{
               echo 'Details Incorrect'; 
          }

     }
} 
           ?>
           
     <form action="" method="post">
          
     	<h2>Sign Up</h2>
     	

          <label>Contact</label>
   
               <input type="tel" 
                      name="Contact" 
                      placeholder="Contact"><br>
      

          <label>Password</label>
  
          
               <input type="password" 
                      name="Password" 
                      placeholder="Password" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'><br>
          

          <label>Gym Name</label>
          
               <input type="text" 
                      name="gym_name" 
                      placeholder="gym_name"><br>
        

          <label>Location</label>
          
               <input type="text" 
                      name="location" 
                      placeholder="location"><br>
          

          <label>Fees</label>
         
               <input type="text" 
                      name="Fees" 
                      placeholder="Fees"><br>
          

          <label>Address</label>
          
               <input type="text" 
                      name="Address" 
                      placeholder="Address"><br>
    
          

     	<button type="submit" name='gymsignup'>Sign Up</button>
          <a href="index2.php" class="ca">Home Page</a>
     </form>
</body>
</html>