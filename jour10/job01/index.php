<?php
include '../connectDatabaseWithServer.php';
function selectEtudiants()
{
    $conn = connectDatabaseWithServer("localhost", "root", "", "jour09");
    $sql = "SELECT id, prenom, nom, sexe, naissance, email FROM etudiants";
    $result = $conn->query($sql);
    if ($result) {
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
        //$json = json_encode($row);
        return $row;
    } else {
        echo "Erreur :" . $conn->error;
    }
}
$etudaints = selectEtudiants();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job01</title>
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