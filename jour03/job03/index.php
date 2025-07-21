<?php
function findVoyelle1($n)
{
    $voyelles = 'aeiouyAEIOUY';
    for ($i = 0; isset($n[$i]); $i++) {
        for ($j = 0; isset($voyelles[$j]); $j++) {
            if ($n[$i] === $voyelles[$j]) {
                echo $n[$i] . '<br>';
            }
        }
    }
}
$str = "I'm sorry Dave I'm afraid I can't do that.";
echo $str . '<br> les voyelles dans cette chaine: <br>';
findVoyelle1($str);

/* function findVoyelle($n)
{
    $voyelles = ['a', 'e', 'i', 'o', 'u', 'y'];

    if (in_array($n, $voyelles)) {
        echo $n . '<br>';
    }
}
$str = "I'm sorry Dave I'm afraid I can't do that.";
echo $str . '<br> les voyelles dans cette chaine: <br>';
$tabStr = str_split($str);
foreach ($tabStr as $key => $value) {
    findVoyelle($value);
}
 */