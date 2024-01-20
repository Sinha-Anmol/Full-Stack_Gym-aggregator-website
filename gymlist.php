<?php
 include "db_conn.php"; 
session_start();
if(isset($_SESSION['user_id'])){
    $id=$_SESSION['user_id'];
}
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
<style>



    .package_div{
        /* border: solid 1px black; */
        padding-left:35rem;
        padding-bottom:45px;
        background:  top/cover no-repeat;
        /* rgb(0, 0, 0, 0.3) */
        /* filter: blur(8px); */
        background-blend-mode: darken;
        /* background: whitesmoke; */
    }
    .package_div h1{
        font-size:2rem;
        font-family: 'Libre Baskerville', serif;
        color: white;
    }
    .package_div  h2{
        font-family: 'Libre Baskerville', serif;
        color: white;
    }

    .package_div div.card-box{
            display: flex;
            display: inline-block;
            justify-content: center;
            /* background-color: whitesmoke; */
            border: 0.1px solid black;
            border-radius: 30px;
            width: 491px;
            /* margin: 20px 25px; */
            margin-top:40px;
            height: auto;
            /* font-size: 80px; */
            /* transition: all 0.5s ease-in-out; */
            font-family: 'Exo', sans-serif;
            /* background:rgb(200, 244, 200); */
            background-color: rgba(41, 39, 39, 0.9);
            padding-left:2rem;
            padding-bottom: 25px;
            box-shadow: 0 5px 30px black;
    }


 
</style>
<body>
    
    <?php include "navbar.php"; ?>
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/18dc883766.js" crossorigin="anonymous"></script>
    <section id="introSection" style="background-image:url('sample10.webp')"> 
        <h1>aarògyam</h1>
        <div class="small">Discover the best gyms & fitness centres in your locality</div><div class="search">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
            
        </div>
        
        </section>
        <?php
        
                           $sql = "SELECT * FROM gym_list";
                           $result = mysqli_query($conn,$sql);
                           $count=mysqli_num_rows($result);
                           
                           
                           if($count>0){
                               while($fetch=mysqli_fetch_array($result,MYSQLI_BOTH)){
                                   
                                   ?>
                               
                               <div class="package_div" style="background-image:url('BG5.jpg')">

 
                               <div class="card-box"> 
                             <echo<style><br></br></echo>
                             <h1><span>Gym Name: </span><?php echo $fetch['gym_name'];?></h1>
                             <h2><span>Location: </span><?php echo $fetch['location'];?></h2>
                             <h2><span>Monthly Fees: </span><?php echo $fetch['Fees'];?></h2>
                             <h2><span>Address: </span><?php echo $fetch['Address'];?></h2>
                               </div>
                             
                         </div>
                            <?php }}?>

                                
                            
     
    

  


<?php include "footer.php"; ?>
</body>
</html>
