<?php
include "../connectDatabaseWithServer.php";
include "../selectData.php";
$data = selectData("SELECT prenom, nom, naissance FROM `etudiants` WHERE YEAR(naissance) >= 1998 && YEAR(naissance) <= 2018");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job12</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Date de naissance</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $key => $value): ?>
                <tr>
                    <td> <?php echo $value['prenom']; ?> </td>
                    <td> <?php echo $value['nom']; ?> </td>
                    <td> <?php echo $value['naissance']; ?> </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>