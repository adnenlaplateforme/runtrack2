<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job01</title>
</head>

<body>
    <form action="#" method="get">
        <fieldset>
            <legend>Formulaire</legend>
            <input type="text" name="fullname" id="fullname" placeholder="fullname">
            <input type="email" name="email" id="email" placeholder="Email">
            <!--             <p>
                <label>Image de profil :</label>
                <input name="fichier" type="file" />
            </p> -->
        </fieldset>
        <button type="submit">Envoyer</button>
    </form>
</body>

</html>
<?php


function getNumArgs()
{
    $arguments = $_GET;
    $i = 0;
    foreach ($arguments as $value) {
        if (strlen($value)) {
            $i++;
        }
    }
    return $i;
}
$numargs = getNumArgs();
echo "Le nombre d'argument GET envoyé est : $numargs\n";
