<?php

if (isset($POST['submit'])) {
    
    include 'dbh.php';
    
     $advisor = mysqli_real_escape_string($conn, $_POST['advisor'] );

     $sql = "INSERT INTO user (advisorid) VALUES ('$advisor');";
    
    mysqli_query($conn, $sql);
    header("Location: ../index.php");
    exit();
