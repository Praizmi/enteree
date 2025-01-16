<?php
$smsg = $emsg = $imsg = "";
function isPalindrome($string){
    $normalizedStr = strtolower(str_replace(' ', '', $string));
    $reverseStr = strrev($normalizedStr);
    return $string === $reverseStr;
}