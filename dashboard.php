<?php 
session_start();
// if (!isset($_SESSION["user_id"])){
//     header("location: login_form.php");
//     exit();
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <a href="dashboard.php">Home</a>
        <a href="create_user.php">Register</a>
        <a href="books_list.php">Books</a>
        <a href="borrowed_books.php">Borrowed Books</a>
        <a href="contact_us.php">Contact</a>
        <a href="logout.php">Logout</a>
    </div>
    <?php
    echo $_SESSION["user_name"];
    ?>
</body>
</html>