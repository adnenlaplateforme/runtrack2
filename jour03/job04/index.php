<?php


function nbrCaracter($text)
{
    $i = 0;
    $res = 0;
    for ($i = 0; isset($text[$i]); $i++) {
        if (($text[$i] !== ' ') && ($text[$i] !== ',')) {
            $res = $res + 1;
        }
    }
    return $res;
}
$str = "Dans l'espace, personne ne vous entend crier";
echo $str . '<br>';
echo 'Le nombre de caracteres dans la chaine est :' . nbrCaracter($str);



/* $str = "Dans l'espace, personne ne vous entend crier";
$res = trim(str_replace(' ', '', $str));
echo $str . '<br>';
function nbrCaracter($text)
{
    $res = strlen($text);
    return $res;
}
echo 'Le nombre de caracteres dans la chaine est :' . nbrCaracter($res); */
