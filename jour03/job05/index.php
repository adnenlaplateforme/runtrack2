<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job05</title>
</head>

<body>
    <?php
    include "table.php";
    ?>
    <table>
        <thread>
            <tr>
                <th>Voyelles</th>
                <th>consonnes</th>
            </tr>
        </thread>
        <tbody>
            <tr>
                <td> <?php echo $dic["voyelles"] ?> </td>
                <td> <?php echo $dic["consonne"] ?> </td>
            </tr>
        </tbody>
    </table>
</body>

</html>