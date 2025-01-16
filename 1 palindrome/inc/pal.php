<?php
if (isset($_POST['checkPalindrome'])) {
    $palindrome = strtolower(trim(($_POST['palindrome'])));
    if (empty($palindrome)) {
        $errs[] = $palindromeError = "value expected";
    }
    if(isPalindrome($palindrome)){
        echo $smsg = "This $palindrome, is a palindrome";
    }else{
        echo $emsg = "In the case of $palindrome, you are not a Palindrome";
    }
}