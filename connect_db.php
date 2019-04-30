<?php
    $host = 'us-cdbr-iron-east-01.cleardb.net';
    $user = 'b859a12ba0c2d9';
    $pass = 'e2e15cf7';
    $db = 'heroku_700de64fb6a62d3';
    $conn = new mysqli($host,$user,$pass,$db);
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
    mysqli_query($conn, "SET NAMES utf8");
?>