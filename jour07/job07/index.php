<?php
function gras($str)
{
    $tab = explode(" ", $str);
    foreach ($tab as $key => $value) {
        if (ctype_upper($value[0])) {
            echo '<b>' . $value . '</b> ';
        } else {
            echo $value . ' ';
        }
    }
}

function cesar($str, $dec = 2)
{
    $alphabet = range("a", "z");

    for ($i = 0; $i < strlen($str); $i++) {
        $keywithdecalage = array_search($str[$i], $alphabet) + $dec;
        $resultat = $alphabet[$keywithdecalage];
        print_r($resultat);
    }
}
function plateforme($str)
{
    $tab = explode(" ", $str);
    foreach ($tab as $key => $value) {
        if ($value[strlen($value) - 1] === 'e' && $value[strlen($value) - 2] === 'm') {
            echo $value . '_<br>';
        } else {
            echo $value . '<br>';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job07</title>
</head>

<body>
    <form action="#" method="post">
        <input type="text" name="str" id="str" placeholder="str">
        <select name="fonction" id="fonction">
            <option value="">Séléctionnez un style</option>
            <option value="gras">gras</option>
            <option value="cesar">cesar</option>
            <option value="plateforme">plateforme</option>

        </select>
        <input type="submit" value="Envoyer">
    </form>
    <?php
    if (isset($_POST['str']) && $_POST['fonction'] === 'gras') {
        gras($_POST['str']);
    } elseif (isset($_POST['str']) && $_POST['fonction'] === 'cesar') {
        cesar($_POST['str'], 2);
    } elseif (isset($_POST['str']) && $_POST['fonction'] === 'plateforme') {
        plateforme(($_POST['str']));
    }


    ?>

</body>

</html>