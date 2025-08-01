<?php
include "../connectDatabaseWithServer.php";
include "../selectData.php";
$data = selectData("SELECT * FROM salles ORDER BY capacite ASC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job09</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>Nom</th>
                <th>id_etage</th>
                <th>Capacite</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $key => $value): ?>
                <tr>
                    <td> <?php echo $value['nom']; ?> </td>
                    <td> <?php echo $value['id_etage']; ?> </td>
                    <td> <?php echo $value['capacite']; ?> </td>
                </tr>
            <?php endforeach ?>

        </tbody>
    </table>
</body>

</html>