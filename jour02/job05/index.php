<?php

function isnombrepremier($a)
{
    if ($a == 0 || $a == 1) {
        return false;
    }
    for ($index = 2; $index <= $a; $index++) {
        if ($a % $index === 0) {
            return false;
        }
        return true;
    }
}

for ($i = 2; $i <= 1000; $i++) {
    if (isnombrepremier($i)) {
        echo $i . '<br>';
    }
}
