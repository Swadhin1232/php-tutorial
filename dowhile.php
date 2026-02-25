do {
    // code to execute
} while (condition);
<?php
$i = 1;

do {
    echo $i . "<br>";
    $i++;
} while ($i <= 5);
?>



Condition False But Still Runs Once
<?php
$i = 10;

do {
    echo "This runs once";//stp2
    $i++;//stp3
} while ($i < 5);//stp1
?>

