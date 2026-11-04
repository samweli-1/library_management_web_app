<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <th>Book ID</th>
        <th>Book Name</th>
        <th>Author</th>
        <th>Category</th>
        <th>Status</th>
        <th>Update</th>
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