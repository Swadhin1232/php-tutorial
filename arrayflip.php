<?php
// Original array
$arr = [1, 2, 3, 4, 5];

echo "Original array: ";
print_r($arr);

// Step 1: Flip (reverse array)
$flipped = array_reverse($arr);

echo "Flipped array: ";
print_r($flipped);

// Step 2: Change elements (multiply by 2)
$changed = array_map(function($x) {
    return $x * 2;
}, $flipped);

echo "Changed array: ";
print_r($changed);
?>


//Example 2: Flip 0 ↔ 1
<?php
$arr = [0, 1, 1, 0, 1];

// Reverse array
$flipped = array_reverse($arr);

// Change values (0 -> 1, 1 -> 0)
$changed = array_map(function($x) {
    return 1 - $x;
}, $flipped);

echo "Result: ";
print_r($changed);
?>