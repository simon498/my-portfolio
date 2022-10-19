<?php
    
    $dbhost="localhost";   //hostname
    $dbsuer="root";    //mysql username
    $dbpass=""; //mysql password
    $db="my_portfolio"; //name of the database

    $conn=mysqli_connect( $dbhost, $dbsuer, $dbpass, $db) or die("Could not connect: " .mysqli_error($conn) );
    if (!isset($_SESSION)) {
        session_start();
    }

?>