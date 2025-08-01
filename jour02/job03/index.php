<?php
for ($i = 0; $i <= 100; $i++) {
    if ($i <= 20) {
        echo '<i>' .  $i . '</i><br>';
    }
    if ($i >= 25 && $i <= 50) {
        if ($i == 42) {
            echo 'La Plateforme_<br>';
        } else {
            echo "<span style='text-decoration: underline;'>" . $i . '</span><br>';
        }
    }
}
