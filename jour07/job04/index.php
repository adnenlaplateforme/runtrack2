<?php
function calcule($a, $operateur, $b)
{
    return eval('return ' . $a . $operateur . $b . ';');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job04</title>
</head>

<body>
    <?php echo calcule(4, '*', 3); ?>
</body>

</html>