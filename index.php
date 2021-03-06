<?php
/**
 * Name: Chad Drennan
 * Date 1/6/20
 * URL: http://cdrennan.greenriverdev.com/328/pp1/
 * Title Pair Program 1
    */

ini_set("display_errors", 1);
error_reporting(E_ALL);

include("functions.php");
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 1</title>
</head>
<body>
    <h1>Pair Program 1</h1>
    <?php
        $numbers = [7, 9, 8, 9, 8, 8, 6];
        printArr($numbers);

        $max = largest($numbers);
        echo "<br> Largest Number: $max <br>";

        echo "<br> Remove Duplicates: <br>";
        printArr(removeDups($numbers));

        echo "<br>Distribution: <br>";
        var_dump(distribution($numbers));
    ?>
</body>
</html>
