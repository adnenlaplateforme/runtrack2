<?php

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

for ($i = 0; isset($str[$i]); $i++) {
    if ($i % 2 === 0) {
        echo $str[$i];
    }
}
/*echo "<br>";
 $tabStr = str_split($str);
foreach ($tabStr as $key => $value) {
    if ($key % 2 == 0) {
        echo $value;
    }
} */
 