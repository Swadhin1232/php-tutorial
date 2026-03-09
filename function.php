function functionName() {
    // code to be executed
}

<?php
function sayHello() {
    echo "Hello, Welcome to PHP!";
}

sayHello(); // calling the function
?>



3. Function with Parameters

Parameters allow you to pass values to a function.

<?php
function greetUser($name) {
    echo "Hello " . $name;
}

greetUser("Rahul");
?>



4. Function with Return Value

A function can return a value using return.

<?php
function addNumbers($a, $b) {
    return $a + $b;
}

$result = addNumbers(5, 3);
echo "Sum: " . $result;
?>