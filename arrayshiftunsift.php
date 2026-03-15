<?php
//array_shift() – Remove First Element


//array_shift(array);

$fruits = array("Apple", "Banana", "Mango");

array_shift($fruits);

print_r($fruits);
?>


<?php
//array_unshift() – Add Element at Beginning


$fruits = array("Banana", "Mango");

array_unshift($fruits, "Apple");

print_r($fruits);
?>