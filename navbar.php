<nav id="navbar">
       <ul class="nav-list">
      <div id="logo">
         <ion-icon name="barbell-outline"></ion-icon> </div>
         <?php
       if(!isset($id)){
  
          echo '<li><a href="index2.php">Home</a> </li>';

       }

       else{
             echo '<li><a href="index.php">Home</a> </li>';
       }?>
      <li><a href="/">About</a> </li>
      <li><a href="/">Contact Us</a> </li>
</ul>
<ul class="nav-list2">
      <?php
       if(!isset($id)){

       echo '<li><a href="signup.php">Sign Up</a> </li>
       <li><a href="login.php">Login</a> </li>';
        
       }else{
        $sql = "SELECT * FROM user WHERE id='$id'";   //unique
		    $result = mysqli_query($conn,$sql);
        $fetch=mysqli_fetch_array($result,MYSQLI_BOTH);
         echo '<li>'.$fetch['Name'].'</li>';
         echo '<li>'.'<a href="logout.php">Log Out</a>'.'</li>';
        
       }
      ?>
    </ul>
    </nav>