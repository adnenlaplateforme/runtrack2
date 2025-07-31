<?php
include "../connectDatabaseWithServer.php";
include "../selectData.php";
$data = selectData("SELECT nom, capacite FROM salles");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job02</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Capacité</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $key => $value): ?>
                <tr>
                    <td> <?php echo $value['nom']; ?> </td>
                    <td> <?php echo $value['capacite']; ?> </td>
                </tr>
            <?php endforeach ?>

        </tbody>
    </table>
</body>

</html>