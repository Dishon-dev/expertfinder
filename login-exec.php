<?php 
    //start session
    session_start();

    //connect to database
    require('configuration.php');

    //sanitize user login form data
    function sanitize($data) {
        global $connection;
        $data = @trim($data);
        $data = stripslashes($data);
        
        return mysqli_real_escape_string($connection,$data);
    }

    //get user data
    $email = sanitize($_POST['usermail']);
    $pass = sanitize($_POST['password']);

    //query user -->username entered should match with the pass
    $selectUser = "SELECT * FROM users  WHERE email='$email' ";
    $result = mysqli_query($connection,$selectUser);

    //check if  the query was successful & number of rows received
    if($result){
        $row =mysqli_num_rows($result);
        $result = mysqli_fetch_assoc($result);  

        if($row > 0) {
            if(password_verify($pass,$result['password'])){
                //Login Successful
                session_regenerate_id();
                $_SESSION['user_id'] = $result['user_id'];
                $_SESSION['fullName'] = $result['fullName'];
                session_write_close();

                //check whether user === admin | normal user
                if($_SESSION['fullName'] == 'admin' && $pass =='admin1234'){
                    //redirect to admin dashboard
                    header("location: index.php");
                    exit();
                } else{
                    //redirect to client dashboard
                    header("location: index.php");
                    exit();
                }
            } else {
                $_SESSION['errorflag'] = 1;
                header("location: login.php");
                exit();
            } 		
		} else {
            $_SESSION['errorflag'] = 3;
            header("location: login.php");
            exit();
        }
    } 
    else {
        //echo "failed!" .mysqli_error($connection);
        die("Query failed!");
    }

?>