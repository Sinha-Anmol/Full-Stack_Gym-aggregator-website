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
     if(isset($_POST['signup'])){
          $Contact=$_POST['Contact'];
          $Password=$_POST['Password'];
          $Name=$_POST['Name'];
          $Email=$_POST['Email'];
          $Country=$_POST['Country'];
          $State=$_POST['State'];
          $City=$_POST['City'];
          $Package=$_POST['Package'];
          $sql = "SELECT * FROM user WHERE  Contact='$Contact'";   //unique
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
               echo   'User already exist';
          }else {
               $sql2 = "INSERT INTO user(Contact, Password, Name ,Email,Country, State, City, Package) VALUES('$Contact', '$Password', '$Name','$Email','$Country','$State', '$City', $Package)";
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
          

          <label>Name</label>
          
               <input type="text" 
                      name="Name" 
                      placeholder="Name"><br>
        

          <label>Email</label>
          
               <input type="email" 
                      name="Email" 
                      placeholder="Email"><br>
          

          <label>Country</label>
         
               <input type="text" 
                      name="Country" 
                      placeholder="Country"><br>
          

          <label>State</label>
          
               <input type="text" 
                      name="State" 
                      placeholder="State"><br>
        

          <label>City</label>
          
               <input type="text" 
                      name="City" 
                      placeholder="City"><br>

          <select>
               <option value="">Packages</option>
               <option value="">Bronge:Under 500</option>
               <option value="">Silver:Under 1000</option>
               <option value="">Gold:Under 5000</option>
               <option value="">Diamond:Above 10000</option>
          </select> 
          
          <label>Package</label>
          
               <input type="text" 
                      name="Package" 
                      placeholder="Package"><br>
          

     	<button type="submit" name='signup'>Sign Up</button>
          <a href="login.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>