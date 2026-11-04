<?php
if ( isset( $_POST["create"] ) ) {
    $a= $_POST["uname"];
    $b= $_POST["mail"];
    $c= $_POST["upass"];
    $con=mysqli_connect("localhost","root","","library_db");
    $create="INSERT INTO `users` (`student_id`, `user_name`, `email`, `passwords`)
             VALUES (NULL, '$a', '$b', '$c')";
    $result=mysqli_query($con,$create);
    if ($result) {
        echo "User Created Successfully";
        header("location: login_form.php");
    } else {
        echo "Incorrect Email or Password";
        header("location: create_user.php");
    }
}
?>