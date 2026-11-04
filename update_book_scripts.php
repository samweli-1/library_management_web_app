<?php
if (isset($_POST['update'])) {
    $a= $_POST['id'];
    $b= $_POST['bname'];
    $c= $_POST['auth'];
    $d= $_POST['cate'];
    $e= $_POST['sta'];

    $con=mysqli_connect("localhost","root","","library_db");
    $update="UPDATE `books` SET `title` = '$b', `author` = '$c', `category` = '$d',
             `availability_status` = '$e' WHERE `books`.`book_id` = '$a'";
    $result=mysqli_query($con,$update);
    if ($result) {
        echo "Book Updated Successfully";
        header("location: books_list.php");
    } else {
        echo "Something Went Wrong";
        header("location: books_list.php");
    }
}
?>