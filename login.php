<?php 
    function error() {
        if(isset($_SESSION['errorflag'])){
            $errmsg = "";
          if($_SESSION['errorflag'] == 1){
            $errmsg = "<strong style = 'color:var(--clr-red); font-size:1rem;'>!Incorrect password</strong>";
          }
          else{ 
            $errmsg = "<strong style= 'color:var(--clr-red); font-size:1rem;'>User not registered</strong> <br>";
          }
          echo $errmsg;
        }
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expert Finder | Sign-In</title>
    <!-- font-awesome -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./header.css">
    <link rel="stylesheet" href="./footer.css">

</head>
<body>
    <?php include 'header.php'; ?>
    
    <main class="form_section">
        <form class="sign_in_up" action="login-exec.php" method="post">
            <h2 class="title">Login</h2>
            <div class="underline"></div>
            <p>Please enter your details below;</p>

            <div class="input_grp">
                <label for="mail">Email:<span class="asterick">*</span></label>
                <input class="input_elem" type="email" name="usermail" id="mail" placeholder="e.g user@gmail.com" required>
            </div>

            <div class="input_grp">
                <label for="password">Password:<span class="asterick">*</span></label>
                <input class="input_elem" type="password" name="password" id="password" placeholder="******" required>
            </div>

                
            <div class="input_grp">
            <button type="submit" name="login" class="btn shadow-drop-2-tb">Log in</button>
            </div>
            <!-- <?php error(); ?> -->
            
            <p>Join us today for free.
                <a href="register.php">Sign Up Now</a>
            </p>
        </form>
    </main>  
    <?php include 'footer.php'; ?>

    <!-- scripts -->
    <script src="./footer.js" type="text/javascript"></script>
</body>
</html>