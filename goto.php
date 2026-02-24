goto label_name;

// some code

label_name:


<?php
echo "Start <br>";

goto skip;// This will jump to the label "skip" and skip the code in between

echo "This will not print <br>";

skip:
echo "End";
?>
