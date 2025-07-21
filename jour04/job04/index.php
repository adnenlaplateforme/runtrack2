<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job04</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="prenom" id="prenom" placeholder="prenom">
        <input type="text" name="nom" id="nom" placeholder="nom">
        <input type="submit" value="Envoyer">
    </form>
    <table>
        <thead>
            <tr>
                <th>Argument</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $arguments = $_POST;
            foreach ($arguments as $key => $value) {
                echo  "
                    <tr>
                        <td>$key</td>
                        <td>$value</td>
                    </tr>
                    ";
            }
            ?>
        </tbody>
    </table>
</body>

</html>