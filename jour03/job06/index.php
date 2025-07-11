<?php
function reverseString($text)
{
    $tab = str_split($text);
    $tabStrReversed = array_reverse($tab);
    foreach ($tabStrReversed as $key => $value) {
        echo $value;
    }
}
$str = "Les choses que l'on possede finissent par nous posseder";
echo $str . '<br>';
reverseString($str);
