<?php

// recursive function
function calcFactorial($num){

    if ($num <= 1){
        return 1;
    }
        
    return ($num * calcFactorial($num-1));
}

echo calcFactorial(4); //120

