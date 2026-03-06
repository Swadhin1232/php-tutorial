the dot (.) operator is used to join two strings together.
<?php

$str1 = "Hello";
$str2 = "World";

$result = $str1 . " " . $str2;

echo $result;

?>

2. Concatenation Assignment Operator (.=)

<?php

$text = "Hello";
$text .= " World";
$text .= "!";

echo $text;

?>

//example
<?php

$a = "PHP ";
$b = "String ";
$c = "Operators";

echo "Using Concatenation Operator: <br>";
$result = $a . $b . $c;
echo $result;

echo "<br><br>";

echo "Using Concatenation Assignment Operator: <br>";
$text = "Learning ";
$text .= "PHP ";
$text .= "Programming";

echo $text;

?>