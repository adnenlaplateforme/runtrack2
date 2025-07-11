<?php
function findVoyelle($n, $tab)
{
    if (in_array($n, $tab)) {
        echo $n . '<br>';
    }
}
$str = "I'm sorry Dave I'm afraid I can't do that.";
echo $str . '<br> les voyelles dans cette chaine: <br>';
$tabStr = str_split($str);
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y'];
foreach ($tabStr as $key => $value) {
    findVoyelle($value, $voyelles);
}
