<?php 
$new_array = array(10,11,12,13,14,15);

//we set the initial sum to 0
$sum = 0;

//use a for loop to increment the sum
for ($i=0; $i < count($new_array); $i++) { 
    $sum = $sum + $new_array[$i];
}


//echo new sum
echo $sum;