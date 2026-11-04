<?php
 $a= $_POST['id'];
$con=mysqli_connect("localhost","root","","library_db");
$del="DELETE FROM books WHERE `books`.`book_id` = '$a'";
$result=mysqli_query($con,$del);
if($result){
    echo "1 Book Removed Successfully";
    header("location: books_list.php");
}else{
    echo "Something went wrong";
    header("location: books_list.php");
}
?>