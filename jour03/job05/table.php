<?php
function findVoyelle($n)
{
    $voyelles = ['a', 'e', 'i', 'o', 'u', 'y'];

    if (in_array($n, $voyelles)) {
        return true;
    } else {
        return false;
    }
}
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait.";
$tabStr = str_split(trim(str_replace(' ', '', $str)));
$dic = array("voyelles" => 0, "consonne" => 0);

foreach ($tabStr as $key => $value) {
    if (findVoyelle($value)) {
        $dic['voyelles'] = $dic['voyelles'] + 1;
    } else {
        $dic['consonne'] = $dic['consonne'] + 1;
    }
}
