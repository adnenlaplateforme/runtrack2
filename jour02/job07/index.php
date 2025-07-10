<?php
function afficheTriangle($hauteur)
{
    echo "<div class='triangle' style=border-top-width:0;border-left-width:" . $hauteur . "px;border-right-width:" . $hauteur . "px;border-bottom-width:" . $hauteur . "px;></div>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Triangle</title>
</head>

<body>
    <?php
    afficheTriangle(50)
    ?>
</body>

</html>