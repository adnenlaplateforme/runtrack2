<?php
function bonjour($jour)
{
    if ($jour === true) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job02</title>
</head>

<body>
    <?php bonjour(false); ?>
</body>

</html>