<?php
function afficheRectangle($largeur, $hauteur)
{
    echo
    '<div style=width:' . $largeur . 'px;height:' . $hauteur . 'px;background:red;>' .
        '</div>';
}
afficheRectangle(100, 200);
