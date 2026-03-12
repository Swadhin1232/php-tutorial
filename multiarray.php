$arrayName = array(
    array(value1, value2, value3),
    array(value1, value2, value3),
    array(value1, value2, value3)
);


<?php

$students = array(
    array("Rahul", 21, "MCA"),
    array("Anita", 22, "MBA"),
    array("Ravi", 23, "BCA")
);

echo $students[0][0]; // Rahul
echo "<br>";
echo $students[1][2]; // MBA

?>