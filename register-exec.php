<?php 
    //Start session
	session_start();

    //connect db
    require_once('configuration.php');

    //sanitize user login form data
    function sanitize($data) {
        global $connection;
        $data = @trim($data);
        $data = stripslashes($data);
        
        return mysqli_real_escape_string($connection,$data);
    }

    //get user data from form & sanitize
    $full_name = sanitize($_POST['full_name']);
    $email = sanitize($_POST['usermail']);
    $phone_number = sanitize($_POST['phone_number']);
    $pass = sanitize($_POST['password']);

    //hash password
    $password = password_hash($pass, PASSWORD_BCRYPT);
    
    //check whether an account with the email exist
    $queryuser = "SELECT email FROM users WHERE email ='$email'";
    $userResult = mysqli_query($connection,$queryuser);

    if(mysqli_num_rows($userResult) > 0){
        echo "<h3 style='color:red'>This email is already used by someone else. Try a different email kindly</h3>";
        header("location: register.php");
        exit();
    } else {
        //insert data
        $query = "INSERT INTO users(fullName, email, phoneNo, password) VALUES('$full_name','$email','$phone_number','$password')";

        $insertData = mysqli_query($connection,$query);

        //check if query was successful
        if($insertData) {
            echo "<h3 style='color:green'>User registered successfully</h3>";
		    header("location: login.php");
		    exit();
	    }else {
		    die("Something went wrong.\n Our team is working on it.\n Please try again after some few minutes.");
            //echo "<h3 style='color:red'>User not registered. Please try again.</h3>".mysqli_error($connection);
	    }
    }

?>