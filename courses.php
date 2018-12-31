<?php

if (isset($POST['submit'])) {
    
    include 'dbh.php';
    
     $courses = mysqli_real_escape_string($conn, $_POST['coursecomp'] );
     $starid = mysqli_real_escape_string($conn, $_POST['starid'] );

     $sql = "INSERT INTO coursescompleted (starid, courseid) VALUES ('$starid', '$courses');";
    
    mysqli_query($conn, $sql);
    
    header("Location: ../advisor.html?courses=success);
    exit();
}