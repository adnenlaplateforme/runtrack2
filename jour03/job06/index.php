<?php
function reverseString($text)
{
    $tab = isset($text) ? str_split($text) : '';
    $tabStrReversed = array_reverse($tab);
    foreach ($tabStrReversed as $key => $value) {
        echo $value;
    }
}
function reverseString2($text)
{
    for ($i = (strlen($text) - 1); $i >= 0; $i--) {
        echo $text[$i];
    }
}
$str = "Les choses que l'on possede finissent par nous posseder";
echo $str . '<br> methode avec function system :<br>';
reverseString($str);
echo '<br> methode sans fonction system:<br>';
reverseString2($str);
