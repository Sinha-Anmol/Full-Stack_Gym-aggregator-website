<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['Contact']) && isset($_POST['Password'])
    && isset($_POST['Name'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$Contact = validate($_POST['Contact']);
	$Password = validate($_POST['Password']);
	$Name = validate($_POST['Name']);
	$Email = validate($_POST['E-mail id']);
	$Country = validate($_POST['Country']);
	$State = validate($_POST['State']);
	$City = validate($_POST['City']);

	$user_data = 'gym='. $gym. '&name='. $name;


	if (empty($Contact)) {
		header("Location: signup.php?error=Contact is required&$user_data");
	    exit();
	}else if(empty($Password)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($Name)){
        header("Location: signup.php?error=Name is required&$user_data");
	    exit();
	}

	else if(empty($Email)){
        header("Location: signup.php?error=E-mail is required&$user_data");
	    exit();
	}
	else if(empty($Country)){
        header("Location: signup.php?error=Country is required&$user_data");
	    exit();
	}
	else if(empty($State)){
        header("Location: signup.php?error=State is required&$user_data");
	    exit();
	}
	else if(empty($City)){
        header("Location: signup.php?error=City is required&$user_data");
	    exit();
	}
	else{

		// hashing the password
        $Password = $Password;

	    $sql = "SELECT * FROM user WHERE gym='$gym' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=Contact is already in use&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO user(Contact, Password, Name ,E-mail id,Country, State, City) VALUES('$Contact', '$Password', '$Name','$Email','$Country','State', 'City')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signup.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}