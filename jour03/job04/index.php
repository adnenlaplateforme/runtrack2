<?php
$str = "Dans l'espace, personne ne vous entend crier";
$res = trim(str_replace(' ', '', $str));
echo $str . '<br>';
function nbrCaracter($text)
{
    $res = strlen($text);
    return $res;
}
echo 'Le nombre de caracteres dans la chaine est :' . nbrCaracter($res);
