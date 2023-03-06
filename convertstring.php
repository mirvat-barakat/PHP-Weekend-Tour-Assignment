<?php
    function convertString($str){
        $consonants='';
        $vowels=['a','e','i','o','u'];
        $output='';
        for($i=0;$i<strlen($str);$i++){
            if ($vowels.include($str[i])) {
                $output = substr($str,$i).$consonants.'ay';
                break;
              } else {
                $consonants += $str[i];
              }
        }
    }
    $inputstring=$_POST['input'];
    $convertedstring=convertString($inputstring);
    echo "Coverted string:'$convertedstring'";
    ?>