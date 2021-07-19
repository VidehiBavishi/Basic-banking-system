<?php
    $dbhost = 'localhost';  
    $dbuser = 'videhi';
    $dbpass = 'vids2103';
    $dbname = 'bank';

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if(! $conn ) {
        die('Could not connect: ' . mysqli_connect_error());
    }
?>