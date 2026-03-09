<?php

$x = 10;   // global variable

function showValue() {
    global $x;   // accessing global variable
    echo $x;
}

showValue();

?>



//local
<?php

function test() {
    $y = 20;   // local variable
    echo $y;
}

test();

?>




<?php

$a = 5;   // global variable

function demo() {
    $b = 10;  // local variable
    global $a;
    
    echo "Global variable: $a <br>";
    echo "Local variable: $b";
}

demo();

?>