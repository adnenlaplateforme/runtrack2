<?php
include "../connectDatabaseWithServer.php";
include "../selectData.php";
$data = selectData("SELECT salles.nom AS nom_salle, etage.nom AS nom_etage FROM salles INNER JOIN etage ON salles.id_etage = etage.id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job13</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>Salle</th>
                <th>Etage</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $key => $value): ?>
                <tr>
                    <td><?php echo $value['nom_salle']; ?></td>
                    <td><?php echo $value['nom_etage']; ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>