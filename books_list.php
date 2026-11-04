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
    <table>
        <th>Book ID</th>
        <th>Book Name</th>
        <th>Author</th>
        <th>Category</th>
        <th>Status</th>
        <th>Update</th>
        <th>Borrow</th>
        <th>Delete</th>
        <th>View</th>

        <?php 
        $con=mysqli_connect("localhost","root","","library_db");
        $select= "SELECT * FROM `books`";
        $result=mysqli_query($con,$select);
        while($row=mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row['book_id']."</td>";
            echo "<td>".$row['title']."</td>";
            echo "<td>".$row['author']."</td>";
            echo "<td>".$row['category']."</td>";
            echo "<td>".$row['availability_status']."</td>";
            echo "<td><a href='update_book_form.php?id=".$row['book_id']." &t=>".$row['title']."
                      &a=".$row['author']." &c=".$row['category']." 
                      &s=".$row['availability_status']."'>Update</a></td>";

            echo "<td><a href='borrow_book.php?id=".$row['book_id']." &t=>".$row['title']."
                      &a=".$row['author']." &c=".$row['category']." 
                      &s=".$row['availability_status']."'>Borrow</a></td>";

            echo "<td><a href='view_book.php?id=".$row['book_id']." &t=>".$row['title']."
                      &a=".$row['author']." &c=".$row['category']." 
                      &s=".$row['availability_status']."'>View</a></td>";

            echo "<td><a href='delete_book.php?id=".$row['book_id']."'>Delete</a></td>";
            echo "</tr>";
        }
        ?>

    </table>
</body>
</html>