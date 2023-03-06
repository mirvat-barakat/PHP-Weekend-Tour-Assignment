<?php
    function reverseNumbers($str) {
    $output = "";
    $numbers = "";
    for ($i = 0;$i < strlen($str);$i++) {
        if (is_numeric($str[$i])) {
            $numbers .=$str[$i];
        } else {
            $output .= strrev($numbers);
            $output .= $str[$i];
            $numbers = "";
        }
    }
    return $output;
}
$inputstring=$_GET['input'];
$reversedstring=reverseNumbers($inputstring);
echo "Reversed string:'$reversedstring'";
?>