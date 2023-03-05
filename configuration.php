<?php 
    define("App_Name", "Expert Finder");
    define("database_host", "localhost");
    define("database_user", "expertFinder");
    define("database_pass", "!expert@finder_$?");
    define("database_name", "expertfinder");
    define("database_port", "3308");

    $connection = mysqli_connect(database_host, database_user, database_pass, database_name, database_port);

    if (mysqli_connect_errno()) {
        echo "Could not connect to the server" . mysqli_connect_error();
    }
?>