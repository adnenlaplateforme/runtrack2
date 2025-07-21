<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job03</title>
</head>

<body>
    <form enctype="multipart/form-data" action="#" method="post">
        <input type="text" name="fullname" id="fullname" placeholder="fullname">
        <input type="text" name="email" id="email" placeholder="Email">
        <p>
            <label>Envoyer votre photo de profil :</label>
            <input name="fichier" type="file" />
        </p>
        <input type="submit" value="Envoyer">
    </form>
</body>

</html>
<?php
function getNumArgs()
{
    $arguments = $_POST;
    $i = 0;
    foreach ($arguments as $value) {
        if (strlen($value)) {
            $i++;
        }
    }
    $file = $_FILES;
    if (count($file) > 0) {
        return $i + 1;
    }
    return $i;
}
$numargs = getNumArgs();
echo "Le nombre d'argument POST envoyé est : $numargs\n";
