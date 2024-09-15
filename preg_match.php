<!-- preg_match();
Description :The preg_match() function in PHP searches a string for a match based on a given regular expression. This function is useful for validating input, pattern matching, or extracting specific information from strings. -->

<?php 
$string = "PHP is the most used server scripting language.";

$expression = preg_match("/PHP/i", $string); // syntax : preg_match(pattern, string, array) // When you use modifier(i) then the function will be case insensitive,,neither you do not use modifier(i) then the function will be case sensitive;

if($expression){
    echo "The statement is true";
}
else{
    echo "The statement is false";
}
?>