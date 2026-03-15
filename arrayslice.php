array_slice(array, start, length, preserve_keys);
<?php
$fruits = array("Apple", "Banana", "Mango", "Orange");

$result = array_slice($fruits, 1, 2);

print_r($result);
?>