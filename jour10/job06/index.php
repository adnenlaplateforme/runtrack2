<?php
include "../connectDatabaseWithServer.php";
include "../selectData.php";
$data = selectData("SELECT COUNT(id) AS NumberOfStudents FROM etudiants");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job06</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre d'etudiants</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <?php echo $data[0]["NumberOfStudents"];
                        ?> </td>
            </tr>

        </tbody>
    </table>
</body>

</html>