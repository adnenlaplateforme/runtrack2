<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job02</title>
</head>

<body>
    <form action="" method="get">
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
            $arguments = $_GET;
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