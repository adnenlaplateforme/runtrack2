<?php
include "../connectDatabaseWithServer.php";
include "../selectData.php";
$data = selectData("SELECT AVG(capacite) AS capacite_moyenne FROM `salles`;");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job11</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>Capacité moyenne</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $data[0]['capacite_moyenne']; ?></td>
            </tr>

        </tbody>
    </table>
</body>

</html>