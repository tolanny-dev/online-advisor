<?php
session_start();
if (isset($POST['submit'])) {
    include 'dbh.php';
    $starid = mysqli_real_escape_string($conn, $_POST['starid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    //Error Handlers
    //Check if inputs are empty
    if (empty($starid) || empty($pwd)) {
        header("Location: ../index.html?login=empty");
        exit();
    } else {
        $sql = "SELECT * FROM user u WHERE u.starid='$starid'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {
            header("Location: ../index.html?login=error");
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($result)) {
                //De-hashing the password 
                $hashedPwdCheck = password_verify($pwd, $row['pwd']);
                if ($hashedPwdCheck == false) {
                    header("Location: ../index.html?login=error");
                    exit();
                } elseif ($hashedPwdCheck == true) {
                    //Log in the user here
                    $_SESSION['u_id'] =$row['starid'];
                    $_SESSION['u_first'] =$row['first'];
                    $_SESSION['u_last'] =$row['last'];
                    $_SESSION['u_email'] =$row['email'];
                    $_SESSION['u_starid'] =$row['starid'];
                    header("Location: ../index.html?login=success");
                    exit();
                }
            }
        }
    }
} else {
    header("Location: ../index.html?login=error");
    exit();
}
