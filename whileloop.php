while (condition) {
    // code to execute
}
<?php
$i = 1;

while ($i <= 5) {
    echo $i . "<br>";
    $i++;
}
?>//1-5 numbers will be printed, each on a new line.







//2. Print even numbers from 1 to 10
<?php
$i = 1;

while ($i <= 10) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
    $i++;
}
?>