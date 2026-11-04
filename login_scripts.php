<?php
session_start();
if (isset($_POST["login"])) {
    $a = $_POST["mail"];
    $b = $_POST["upass"];

    $con=mysqli_connect("localhost","root","","library_db");
    $login = "SELECT * FROM `users` WHERE email='$a' AND passwords='$b'";
    $result = mysqli_query($con,$login);
    $user = mysqli_fetch_assoc($result);
    if ($user){
        $_SESSION["student_id"] = $user["student_id"]; 
        $_SESSION["user_name"] = $user["user_name"];
        $_SESSION["email"] = $user["email"];

        header("location: dashboard.php");
        exit();
    }
        else {
            header("location: login_form.php?");
        }
    }

?>