<?php
include "../connectDatabaseWithServer.php";
include "../selectData.php";
$etudaints = selectData("SELECT * FROM etudiants WHERE TIMESTAMPDIFF(YEAR, naissance, CURRENT_DATE) < 18");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job05</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Naissance</th>
                <th>Sexe</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($etudaints as $key => $value): ?>
                <tr>
                    <td> <?php echo $value['nom']; ?> </td>
                    <td> <?php echo $value['prenom']; ?> </td>
                    <td> <?php echo $value['naissance']; ?> </td>
                    <td> <?php echo $value['sexe']; ?> </td>
                    <td> <?php echo $value['email']; ?> </td>
                </tr>
            <?php endforeach ?>

        </tbody>
    </table>
</body>

</html>