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
    <h2>Book Details</h2>
    <ul>
        <li>Book Title: <?php echo $b; ?> </li>
        <li>Author: <?php echo $c; ?></li>
        <li>Category: <?php echo $e; ?></li>
        <li>Status: <?php echo $d; ?></li>
    </ul>
</body>
</html>