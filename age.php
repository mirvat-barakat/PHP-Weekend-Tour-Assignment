<?php
function is_prime($num)
{
    if($num == 1)
        return false;
    for($i=2;$i <$num;$i++)
    {
        if($num % $i == 0)
            return false;
    }
    return true;
}
function is_even($num)
{
    if($num%2==0)
        return true;
    return false;
}
$yearofbirth = $_POST['yearofbirth'];
$age = date('Y') - $yearofbirth;

if(is_prime($yearofbirth) && is_even($yearofbirth))
     echo "your age is prime and even.";
if(!is_prime($yearofbirth) && is_even($yearofbirth))
     echo "your age is even and not prime.";
if(is_prime($yearofbirth) && !is_even($yearofbirth))
     echo "your age is prime and not even.";
?>