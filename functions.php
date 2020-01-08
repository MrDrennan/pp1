<?php

function printArr($arr) {
    foreach($arr as $element) {
        echo "$element <br>";
    }
}

function largest($arr) {
    if (sizeof($arr) == 0) {
        return "Array is empty";
    }
    $max = $arr[0];
    foreach($arr as $num) {
        if ($num > $max) {
            $max = $num;
        }
    }
    return $max;
}
