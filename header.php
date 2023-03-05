<!-- <?php 
    //start session
    session_start();

    //create database conn
    require 'configuration.php';

    if(isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
    }
?> -->


<section class="header">
    <nav>
        <div>
        <h2>Expert Finder</h2>
        </div>
        
        <div class="nav-links">
            <ul>
                <li><a href="./index.php">Home</a></li>
			    <li><a href="./experts.php">Our Experts</a></li>
                <li><a href="">Experts Near Me</a></li>
			    <li><a href="./contact.php">Contact Us</a></li>
			    <li><a href="">Clients Views</a></li>
                <li><a href="./login.php">Sign In</a></li>
                <li><a href="./register.php">Sign Up</a></li>
			</ul>
        </div>
    </nav>
</section>