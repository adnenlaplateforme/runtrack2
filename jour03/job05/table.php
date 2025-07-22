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
echo str_replace(' ', '', $str);
$tabStr = str_split(trim(str_replace(' ', '', $str)));
$dic = array("voyelles" => 0, "consonne" => 0);

foreach ($tabStr as $key => $value) {
    if (findVoyelle($value)) {
        $dic['voyelles'] = $dic['voyelles'] + 1;
    } else {
        $dic['consonne'] = $dic['consonne'] + 1;
    }
}

/* function findVoyelle1($n)
{
    $voyelles = 'aeiouyAEIOUY';
    for ($i = 0; isset($n[$i]); $i++) {
        for ($j = 0; isset($voyelles[$j]); $j++) {
            if ($n[$i] === $voyelles[$j]) {
                return true;
            }
        }
    }
    return false;
}
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait.";
echo $str . '<br>';
$dic = array("voyelles" => 0, "consonne" => 0);
for ($i = 0; isset($str[$i]); $i++) {
    if (findVoyelle1($str[$i])) {
        $dic['voyelles'] = $dic['voyelles'] + 1;
    } else {
        $dic['consonne'] = $dic['consonne'] + 1;
    }
} */
