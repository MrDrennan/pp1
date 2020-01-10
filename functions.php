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

function removeDups($arr) {
    $newArr = [];
    for ($i = 0; $i < sizeof($arr); $i++) {
        if (!in_array($arr[$i], $newArr)) {
            $newArr[] = $arr[$i];
        }
    }
    return $newArr;
}

function distribution($arr) {
    $newArr = [];
    foreach ($arr as $num) {
        if (array_key_exists($num, $newArr)) {
            $newArr[$num]++;
        }
        else {
            $newArr[$num] = 1;
        }
    }
    ksort($newArr);

    return $newArr;
}

