<?php
function connectDatabaseWithServer()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "jour09";

    // connect the database with server

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_errno) {
        echo "Failed to connect to MySQL :" . $conn->connect_errno;
        exit();
    }
    return $conn;
}
//$sql = "SELECT JSON_ARRAYAGG(JSON_OBJECT('id', id, 'nom', nom, 'prenom', prenom, 'email', email)) AS user_json FROM utilisateurs";

function selectEtudiants()
{
    $conn = connectDatabaseWithServer();
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