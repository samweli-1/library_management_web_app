<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
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
