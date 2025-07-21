<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job06</title>
</head>

<body>
    <form action="#" method="get">
        <input type="number" name="nombre" id="nombre" placeholder="nombre">
        <input type="submit" value="Envoyer">
    </form>
</body>

</html>

<?php
function isNombrePair($nombre)
{
    $nombre = intval($nombre);
    if ($nombre % 2 != 0) {
        return false;
    } else {
        return true;
    }
}

if (isset($_GET["nombre"]) && isNombrePair($_GET["nombre"])) {
    echo "is pair";
} else if (isset($_GET["nombre"]) && !isNombrePair($_GET["nombre"])) {
    echo "is impair";
}
