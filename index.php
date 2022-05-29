<?php 


function insertion($arr) {

    for($i = 0; $i < count($arr); $i++) { 
        $key = $arr[$i]; 
        $j = $i - 1; 
        while($j >= 0 && $arr[$j] > $key ) { 
            $arr[$j + 1] = $arr[$j];
            $j = $j - 1;
        }
        
        $arr[$j + 1] = $key;
    }
    
    return $arr;
}

$array = [7,3,5,8,2,9,4,15,6];

$insertionArray = insertion($array);

print_r($insertionArray);
