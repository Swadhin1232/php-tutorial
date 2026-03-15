<?php
//1️⃣ Using count() Function
$fruits = array("Apple", "Banana", "Mango", "Orange");

$size = count($fruits);

echo "Array size is: " . $size;
?>



<?php
//Loop Using Array Size
$numbers = array(10, 20, 30, 40);

for($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . "<br>";
}
?>