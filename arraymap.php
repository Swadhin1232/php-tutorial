 <?php
function square($n) {
    return $n * $n;
}

$numbers = array(1, 2, 3, 4);

$result = array_map("square", $numbers);

print_r($result);
?>


<?php
$numbers = array(1, 2, 3, 4);

$result = array_map(function($n){
    return $n * 2;
}, $numbers);

print_r($result);


?>