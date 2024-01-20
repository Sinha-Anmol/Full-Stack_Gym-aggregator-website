<?php
 include "db_conn.php"; 
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alpha </title><link href="https://fonts.googleapis.com/css2?family=Aladin&family=Amita:wght@700&family=Arima+Madurai:wght@100&family=Exo:wght@100&family=Overlock:wght@700&family=Signika+Negative:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="/jquery.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

   

</head>
<body>
    
    <?php include "navbar.php"; ?>
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/18dc883766.js" crossorigin="anonymous"></script>
    <section id="introSection" style="background-image:url('sample10.webp')"> 
        <h1>aarògyam</h1>
        <div class="small">Discover the best gyms & fitness centres in your locality</div><div class="search">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

           <?php if(isset($id)){
            echo '<div class="searchItem1"><i class="fa fa-map-marker"></i>
            </div>'.'<div class="searchItem">
            <form action="" method="POST">
               <input type="text" class="location" placeholder="Location" name="location">
              
               <input type="submit" name="search">
           </form>
         </div>';
           
            }else{
              
            }
            ?>
        </div>
        
        </section>
        <?php
                       if(isset($_POST['search'])){
                        header("Location: gymloc.php");
                        }?>
                            

    <section id="achievementSection"><a href="gymlist.php">
      <div class="card"> 
        <div class="card-box"> 
          <div class="card-img"> <img src="./static/sample8.jpg"/></div>
        </div>
        <h5>Gyms </h5>
      </div></a> 
    <a href="/bmi">
      <div class="card"> 
        <div class="card-box"> 
          <div class="card-img"> <img src="./static/fitness3.jpeg"/></div>
        </div>
        <h5>Fitness Centres </h5>
      </div></a> 
    <a href="bmi.php">
      <div class="card"> 
        <div class="card-box"> 
          <div class="card-img"> <img src="./static/imgg/bmi5.jpg"/></div>
        </div>
        <h5>BMI</h5>
      </div></a> 
    <a href="/bmi">
      <div class="card"> 
        <div class="card-box"> 
          <div class="card-img"> <img src="./static/imgg/supplement2.jpg"/></div>
        </div>
        <h5>Supplements </h5>
      </div></a> 
    </section>

<section id="facilitiesSection"><div class="box-main">
<div class="firstHalf">
  <div class="people">
     <i class="fa-solid fa-user-plus"></i></div>
  <h3>Facilities offered to consumers
    <p> We keep record of your health and previous experiences in form of data to provide you with better to best service in future according to your preference and choice. We serve you with best available gyms, fitness centers and suppliment brands in your locality/city/country in accordance to your covenience.You can use our platform to search, discover, write customer generated reviews, view and upload photos and order suppliments.BY USING OUR TECHNOLOGY YOU CAN GET RID OF BORING SEARCHING AND SORTING OF GYM/CENTERS/BRANDS. </p>
  </h3></div>
<button class="secondHalf">
  <li><a href="signup.php">Join</a></li></div>
</div>
</section>

<section id="sponserSection"><div class="box-main">
<div class="firstHalf">
  <div class="people">
     <i class="fa-solid fa-handshake"></i></div>
  <h3>Work with us 
    <p>Lorem, ipsum dolor sit amet consectetur placeat voluptates, quod dolorum assumenda omnis error tempore. Vitae fugiat impedit fugit in minima ipsum, suscipit illo excepturi repellendus mollitia ut placeat ea. Libero voluptatibus suscipit illo, harum, rerum nihil quidem, quis asperiores adipisci aut ducimus illum molestias fuga corporis omnis praesentium obcaecati. Impedit itaque voluptatem voluptatum nesciunt consequuntur, aperiam velit nobis.</p>
  </h3></div>
<button class="secondHalf">
  <li><a href="gymsignup.php">Join</a></li></div>
</div>
</section>
  


<?php include "footer.php"; ?>
</body>
</html>