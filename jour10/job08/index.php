<?php
include "../connectDatabaseWithServer.php";
include "../selectData.php";
$data = selectData("SELECT SUM(capacite) AS capacite_totale FROM salles");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job08</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>Capacite totale</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <?php echo $data[0]["capacite_totale"];
                        ?> </td>
            </tr>

        </tbody>
    </table>
</body>

</html>