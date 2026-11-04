<?php
if (isset($_POST['update'])) {
    $a= $_POST['id'];
    $b= $_POST['bname'];
    $c= $_POST['auth'];
    $d= $_POST['cate'];
    $e= $_POST['sta'];

    $con=mysqli_connect("localhost","root","","library_db");
    $update="";
}
?>