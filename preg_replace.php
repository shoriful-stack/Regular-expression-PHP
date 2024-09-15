<!-- preg_replace
The preg_replace() function in PHP performs a search and replace using regular expressions. It allows you to replace parts of a string that match a given pattern with a specified replacement. This function is powerful for pattern-based string manipulation, such as formatting data or filtering content. -->

<?php 

$string = "I am a student";

$pattern = "/I am/i";

$replace = "You are";

echo preg_replace($pattern, $replace, $string); // syntax = preg_replace(pattern, replace, string, limit)
?>