AND Operator (&& or and)

Returns true if both conditions are true.

<?php
$a = 10;
$b = 20;

if ($a < 15 && $b > 15) {
    echo "Both conditions are true";
}
?>

OR Operator (|| or or)

Returns true if at least one condition is true.

<?php
$a = 10;
$b = 5;

if ($a < 15 || $b > 10) {
    echo "At least one condition is true";
}
?>

NOT Operator (!)

Reverses the result (true → false, false → true).

<?php
$a = 10;

if (!($a > 20)) {
    echo "Condition is true";
}
?>

XOR Operator (xor)

Returns true if only one condition is true (not both).

<?php
$a = true;
$b = false;

if ($a xor $b) {
    echo "Only one condition is true";
}
?>