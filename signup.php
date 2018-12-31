<?php

if (isset($_POST['submit'])) {
    
    include 'dbh.php';
    
    $first = mysqli_real_escape_string($conn, $_POST['first'] );
    $last = mysqli_real_escape_string($conn, $_POST['last'] );
    $email = mysqli_real_escape_string($conn, $_POST['email'] );
    $starid = mysqli_real_escape_string($conn, $_POST['starid'] );
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd'] );
    
    //Check for taken starid 
    $sql = "SELECT * FROM user WHERE starid='$starid'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
                
    if ($resultCheck > 0) {
        header ("Location: ../index.php?signup=usertaken");
        echo "User account already exists";
        exit();
    } else {
        //Hashing the password
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
        //Insert the user into the Database
        $sql = "INSERT INTO user (starid, first, last, email, pwd) VALUES ('$starid', '$first', '$last', '$email', '$hashedPwd');";
        mysqli_query($conn, $sql);
        header("Location: ../courses.html");
        exit();
    }
}
    