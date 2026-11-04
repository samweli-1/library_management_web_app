<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=$_GET["id"];
    $b=$_GET["t"];
    $c=$_GET["a"];
    $d=$_GET["s"];
    $e=$_GET["c"];
    ?>
    <form action="update_book_scripts.php" method="POST">
        <input type="hidden" name="id"  value="<?php echo $a; ?>">
        Book Title: <input type="text" name="bname" value="<?php echo $b; ?>"><br><br>
        Author: <input type="text" name="auth" value="<?php echo $c; ?>"><br><br>
        Category: <input type="text" name="cate" value="<?php echo $e; ?>"><br><br>
        Status: <input type="text" name="sta" value="<?php echo $d; ?>"><br><br>
        <input type="submit" name="update" value="Save Changes">
    </form>
</body>
</html>