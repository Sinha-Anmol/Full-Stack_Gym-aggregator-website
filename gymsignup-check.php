<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['Contact']) && isset($_POST['Password'])
    && isset($_POST['gym_name'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$Contact = validate($_POST['Contact']);
	$Password = validate($_POST['Password']);
	$gym_name = validate($_POST['gym_name']);
	$location = validate($_POST['location']);
	$Fess = validate($_POST['Fess']);
	$Address = validate($_POST['Address']);


	$gym_data = 'gym='. $gym. '&name='. $name;


	if (empty($Contact)) {
		header("Location: gymsignup.php?error=Contact is required&$gym_data");
	    exit();
	}else if(empty($Password)){
        header("Location: gymsignup.php?error=Password is required&$gym_data");
	    exit();
	}
	else if(empty($gym_name)){
        header("Location: gymsignup.php?error=gym_name is required&$gym_data");
	    exit();
	}

	else if(empty($location)){
        header("Location: gymsignup.php?error=E-mail is required&$gym_data");
	    exit();
	}
	else if(empty($Fess)){
        header("Location: gymsignup.php?error=Fess is required&$gym_data");
	    exit();
	}
	else if(empty($Address)){
        header("Location: gymsignup.php?error=Address is required&$gym_data");
	    exit();
	}

	else{

		// hashing the password
        $Password = $Password;

	    $sql = "SELECT * FROM gym_list WHERE gym='$gym' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: gymsignup.php?error=Contact is already in use&$gym_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO gym_list(Contact, Password, gym_name ,location,Fess, Address, City) VALUES('$Contact', '$Password', '$gym_name','$location','$Fess','Address', 'City')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: gymsignup.php?success=Your Gym Has Been Listed");
	         exit();
           }else {
	           	header("Location: gymsignup.php?error=unknown error occurred&$gym_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: gymsignup.php");
	exit();
}