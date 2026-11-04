 <?php
    $a=$_GET["id"];
    $b=$_GET["t"];
    $c=$_GET["a"];
    $d=$_GET["s"];
    $e=$_GET["c"];

    $con=mysqli_connect("localhost","root","","library_db");
    $insert="INSERT INTO `borrowed_books` (`student_id`, `book_id`, `borrow_date`, `return_date`)
     VALUES ('3', '3', '2026-11-01', '2026-11-20')";
    $result=mysqli_query($con,$insert);
    if ($result) {
        echo "Book Updated Successfully";
        header("location: books_list.php");
    } else {
        echo "Something Went Wrong";
        header("location: books_list.php");
    }
    ?>