<?php

$a = 10;
$b = 5;
$c = "10";

echo "Value of a = $a <br>";
echo "Value of b = $b <br>";
echo "Value of c = $c <br><br>";

/* Equal operator */
if ($a == $c) {
    echo "a == c : Values are equal <br>";
}

/* Identical operator */
if ($a === $c) {
    echo "a === c : Values and types are same <br>";
} else {
    echo "a === c : Values are equal but types are different <br>";
}

/* Not equal operator */
if ($a != $b) {
    echo "a != b : a is not equal to b <br>";
}

/* Not identical operator */
if ($a !== $c) {
    echo "a !== c : a and c are not identical <br>";
}

/* Greater than */
if ($a > $b) {
    echo "a > b : a is greater than b <br>";
}

/* Less than */
if ($b < $a) {
    echo "b < a : b is less than a <br>";
}

/* Greater than or equal to */
if ($a >= 10) {
    echo "a >= 10 : a is greater than or equal to 10 <br>";
}

/* Less than or equal to */
if ($b <= 5) {
    echo "b <= 5 : b is less than or equal to 5 <br>";
}

/* Spaceship operator */
$result = $a <=> $b;

echo "<br>Spaceship operator result (a <=> b) = $result";

?>