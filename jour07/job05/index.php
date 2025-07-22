<?php
function occurences($str, $char)
{
    $count = 0;
    for ($i = 0; isset($str[$i]); $i++) {
        if ($str[$i] === $char) {
            $count += 1;
        }
    }
    return $count;
    //return substr_count($str, $char);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job05</title>
</head>

<body>
    <?php echo occurences("Bonjouro", "o") ?>
</body>

</html>