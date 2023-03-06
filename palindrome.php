<?php 
    function isPalindrome ($str){
        if($str.length<=1){
            return true;
        }
        if($str[0]==$str[$str.length-1]){
            return isPalindrome($str.slice(1,$str.length-1));
        }else{
            return false;
        }
     }
    $inputString = $_GET['string'];
    $inputString = trim($inputString );
    if (isPalindrome($inputString)){
        echo "'$inputString' is palindrome;"
     }else{
        echo "'$inputString' is not palindrome";
     }
    ?>