<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expert Finder | Sign-Up</title>
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
        <form class="sign_in_up" action="register-exec.php" method="post">
            <h2 class="title">Sign Up</h2>
            <div class="underline"></div>
            <p>Please enter your details below:</p>

            <div class="input_grp">
                <label for="fname">Full Name:<span class="asterick">*</span></label>
                <input class="input_elem" type="text" name="full_name" id="fname" placeholder="e.g Mike Dean" required>
            </div>

            <div class="input_grp">
                <label for="mail">Email:<span class="asterick">*</span></label>
                <input class="input_elem" type="email" name="usermail" id="mail" placeholder="e.g user@gmail.com" required>
            </div>

            <div class="input_grp">
                <label for="phone_no">Phone No:<span class="asterick">*</span></label>
                <input class="input_elem" type="tel" name="phone_number" id="phone_no" placeholder="+254708910911" required>
            </div>

            <div class="input_grp">
                <label for="password">Password:<span class="asterick">*</span></label>
                <input class="input_elem" type="password" name="password" id="password" placeholder="******" required>
            </div>

            <div class="input_grp">
                <label for="cpassword">Confirm Password:<span class="asterick">*</span></label>
                <input class="input_elem" type="password" name="confirm_password" id="cpassword" placeholder="******" required>
            </div>

                
            <div class="input_grp">
            <button type="submit" name="sign_up" class="btn shadow-drop-2-tb">Sign Up</button>
            </div>
            
            <p>Already have an account.
                <a href="login.php">Sign In</a>
            </p>
        </form>
    </main>
    <?php include 'footer.php'; ?>

    <!-- scripts -->
    <script src="./footer.js" type="text/javascript"></script>
</body>
</html>