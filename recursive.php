function functionName($value){
    if(condition){
        return result;   // base case
    }
    else{
        return functionName(smaller_value); // recursive call
    }
}

<?php

function factorial($n) {
    if ($n == 1) {
        return 1;   // base condition
    }
    else {
        return $n * factorial($n - 1); // recursive call
    }
}

echo factorial(5);

?>