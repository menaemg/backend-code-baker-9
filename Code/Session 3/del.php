<!-- PHP program to print array elements using foreach loop. -->

<?php
//declare array  
$season = array("Summer", "Winter", "Autumn", "Rainy");

//access array elements using foreach loop  
foreach ($season as $element) {
    echo "$element";
    echo "</br>";
}


for ($i = 0; $i < count($season); $i++) {
    echo $season[$i] . "<br>";
}

?>


<!-- PHP program to print associative array elements using foreach loop. -->

<?php
//declare array  
$employee = array(
    "Name" => "Alex",
    "Email" => "alex_jtp@gmail.com",
    "Age" => 21,
    "Gender" => "Male"
);

//display associative array element through foreach loop  
foreach ($employee as $key => $element) {
    echo $key . " : " . $element;
    echo "</br>";
}

?>