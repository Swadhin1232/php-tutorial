<?php
//array_splice(array, start, length, replacement);
$numbers = array(10, 20, 30, 40, 50);

array_splice($numbers, 1, 2);

print_r($numbers);
?>
output
//Array
(
    [0] => 10
    [1] => 40
    [2] => 50
)

<?php
//Replace Elements Example
$numbers = array(10, 20, 30, 40);

array_splice($numbers, 1, 2, array(100, 200));

print_r($numbers);
?>