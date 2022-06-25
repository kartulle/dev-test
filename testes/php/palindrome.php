<?php
class Palindrome
{
    public static function isPalindrome($word)
    {
        $word = strtolower($word);
        
            for($i = 0; $i < intval(strlen($word)/2); $i++){
                if($word[$i] != $word[-$i -1]){
                    return "FALSE";
                }
                return "TRUE"; 
            }
    }
}

echo Palindrome::isPalindrome('Asa');
?>