<?php
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = [];

foreach ($arr1 as $value) {
    array_push($arr3, $value);
}
foreach ($arr2 as $value) {
    array_push($arr3, $value);
}

echo implode('-',$arr3);