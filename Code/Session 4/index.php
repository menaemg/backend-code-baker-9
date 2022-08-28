<?php 




// function sayHello( $age,  $name = "mohamed" ){
//     return "hello $name age $age";
// }

// echo sayHello(15);


// function sum($num1 , $num2){
//     return $num1 + $num2;
// }
// sum(10,20);
// echo sum(5,10);
// sum(10,30);

// $name = "ahmed";

// function sayHello( ){
//     //$name = "ahmed";
//     echo $name;
// }

// echo sayHello();

//echo $name;

// $hello = "Hello World!";
// $age = 15;

// function test(){
    
//     $name = "ahmed";

//     $GLOBALS['name'] = $name;

//     return $name;

// }

// test();  //error

// var_dump($GLOBALS);


// echo $name;

//echo $hello; //hello world

// phpinfo();

// echo PHP_INT_MIN;

// echo __DIR__;
// echo __FILE__;
// echo __LINE__;

// var_dump($GLOBALS);

// var_dump($_SERVER['REQUEST_URI']);
?>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
    <label for="">name</label>
    <input type="text" name="name1">
    <label for="">age</label>
    <input type="number" name="age">
    <input type="submit" value="sumbit" />

    <h1>
        <?= isset( $_GET['name1']) ? $_GET['name1']  : ''; ?></h1>
</form>

<?php 

// var_dump($_GET);
