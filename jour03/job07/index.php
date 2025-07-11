<?php
function replaceDecalage($str)
{
    $tab = str_split($str);
    $res = '';
    for ($i = 1; $i < count($tab); $i++) {
        $res = $res . $tab[$i];
    }
    echo $res . $tab[0];
}
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
replaceDecalage($str);
