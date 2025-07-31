<?php
echo '<pre style="font-family: monospace">';

$largeur = 20;
$hauteur = 20;

for ($i = 1; $i <= $hauteur; $i++) {
    for ($j = 0; $j <= $largeur; $j++) {
        if ($i == 1 || $i == $hauteur) {
            echo "_";
        } elseif ($j == 1 || $j == $largeur) {
            echo "|";
        } elseif ($j == 0) {
            echo "";
        } else {
            echo " ";
        }
    }
    echo "<br>";
}

/* function afficheRectangle($largeur, $hauteur)
{
    echo
    '<div style=width:' . $largeur . 'px;height:' . $hauteur . 'px;background:red;>' .
        '</div>';
}
afficheRectangle(100, 200);
 */