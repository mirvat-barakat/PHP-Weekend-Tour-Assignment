<?php
function selectionSort($numbers){
    for($i=0;$i<count($numbers)-1;$i++){
        $min=$i;
        for($j=$i+1;$j<count($numbers);$j++){
            if($numbers[$j]<$numbers[$min]){
                $min=$j;
            }
        }
        $numbers = swap_positions($numbers, $i, $min);
    }
    return $numbers;
}
?>