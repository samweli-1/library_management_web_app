<?php
if (isset($_POST['create'])) {
    $a= $_POST['bname'];
    $b= $_POST['auth'];
    $c= $_POST['cat'];

    $con=mysqli_connect("localhost","root","","library_db");
    $create="INSERT INTO `books` (`book_id`, `title`, `author`, `category`, `availability_status`)
             VALUES (NULL, '$a', '$b', '$c', 'Available')";
    $result=mysqli_query($con,$create);

    if ($result) {
        echo "Book Added Successfully";
        header("location: books_list.php");
    } else {
        echo "Something went wrong";
        header("location: books_list.php");
    }
}
?>