<!-- preg_match_all();
description :  -->

<?php
$string = "PHP is the server scripting web language.PHP best!";

$expression = preg_match_all("/PHP/i", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";


// when you match multiple item you should use pie(|)
$string = "PHP is the server scripting web language.PHP best!";

$expression = preg_match_all("/PHP|web|is/i", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>"

?>
