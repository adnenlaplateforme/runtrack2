<?php
for ($i = 0; $i <= 100; $i++) {
    if ($i >= 0 && $i <= 20) {
        echo '<i>' .  $i . '</i><br>';
    } else if ($i >= 25 && $i <= 50) {
        if ($i = 42) {
            echo "Laplateforme_<br>";
        } else {
            echo "<span style='text-decoration: underline;'>" . $i . '</span><br>';
        }
    } else {
        echo $i . '<br>';
    }
}
