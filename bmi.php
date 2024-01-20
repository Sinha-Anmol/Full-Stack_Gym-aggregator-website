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
    <link href="https://fonts.googleapis.com/css2?family=Aladin&family=Amita:wght@700&family=Arima+Madurai:wght@100&family=Exo:wght@100&family=Libre+Baskerville&family=Overlock:wght@700&family=Signika+Negative:wght@600&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</head>
<style>
    .bmii{
    display: flex;
    align-items: center;
    padding-top: 95px;
    padding-left: 30rem;
}
</style>
<body>
    
    <?php include "navbar.php"; ?>
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/18dc883766.js" crossorigin="anonymous"></script>
    <div class="bmii">
           
    <iframe src="https://www.mealpro.net/bmi/" frameborder="0" width="575" height="360" style="max-width: 100%"></iframe>
    </div>

                                
                            
     
    

  


<?php include "footer.php"; ?>
</body>
</html>
