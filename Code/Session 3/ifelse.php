<!-- only if  -->

<?php
$num = 50;
if ($num < 100) {
    echo "$num is less than 100 <br>";
} elseif ($num > 100 & $num < 200) {
    echo "$num is less than 200 <br>";
} else {
    echo "$num is not less than 100 <br>";
}
?>



<!-- if with else  -->

<?php
$num = 13;
if ($num % 2 == 0) {
    echo "$num is even number";
} else {
    echo "$num is odd number";
}
?>


<!-- if with multi else if -->

<?php
$marks = 160;
if ($marks < 33) {
    echo "fail";
} else if ($marks >= 34 && $marks < 50) {
    echo "D grade";
} else if ($marks >= 50 && $marks < 65) {
    echo "C grade";
} else if ($marks >= 65 && $marks < 80) {
    echo "B grade";
} else if ($marks >= 80 && $marks < 90) {
    echo "A grade";
} else if ($marks >= 90 && $marks < 100) {
    echo "A+ grade";
} else {
    echo "Invalid input";
}
?>