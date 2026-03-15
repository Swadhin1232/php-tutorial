<?php
//array_push() – Add Element to End of Array
//syntax array_push(array, value1, value2, ...);
$fruits = array("Apple", "Banana");

array_push($fruits, "Mango", "Orange");

print_r($fruits);
?>



<?php
//array_pop() – Remove Last Element of Array
//array_pop(array);
$fruits = array("Apple", "Banana", "Mango");

array_pop($fruits);

print_r($fruits);
?>