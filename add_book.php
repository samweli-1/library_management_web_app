<?php 
session_start();
if (!isset($_SESSION["student_id"])){
    header("location: login_form.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.js">
</head>
<body>
    <ul class="nav">
  <li class="nav-item">
    <a class="nav-link" href="dashboard.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="create_user.php">Register</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="books_list.php">Books</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="borrowed_books.php">Borrowed Books</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="contact_us.php">Contact</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="logout.php">Logout</a>
  </li>
</ul>
<div>
    <?php
    echo $_SESSION["user_name"];
    ?>
</div>
    <form action="add_book_scripts.php" method="POST">
        Book Name: <input type="text" name="bname"><br><br>
        Author: <input type="text" name="auth"><br><br>
        Category: <input type="text" name="cat"><br><br>
        <input type="submit" name="create" value="Add Book">
    </form>
</body>
</html>