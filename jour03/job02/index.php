<?php

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

$tabStr = str_split($str);

foreach ($tabStr as $key => $value) {
    if ($key % 2 == 0) {
        echo $value;
    }
}
