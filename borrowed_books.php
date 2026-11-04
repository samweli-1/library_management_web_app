<<?php 
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
    <table class="table">
        <th>Book Name</th>
        <th>Author</th>
        <th>Student Name</th>
        <th>Borrow Date</th>
        <th>Return Date</th>
        <?php 
        $con=mysqli_connect("localhost","root","","library_db");
        $select= "SELECT users.user_name,books.title,books.author,borrowed_books.borrow_date,borrowed_books.return_date 
                  FROM borrowed_books INNER JOIN users ON borrowed_books.student_id = users.student_id
                  INNER JOIN books ON borrowed_books.book_id = books.book_id";
        $result=mysqli_query($con,$select);
        while($row=mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row['title']."</td>";
            echo "<td>".$row['author']."</td>";
            echo "<td>".$row['user_name']."</td>";
            echo "<td>".$row['borrow_date']."</td>";
            echo "<td>".$row['return_date']."</td>";
        }
        ?>

    </table>
</body>
</html>
