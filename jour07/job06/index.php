<?php
function leetSpeak($str)
{
    return str_ireplace(array("a", "b", "e", "g", "l", "s", "t"), array("4", "8", "3", "6", "1", "5", "7"), $str);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job06</title>
</head>

<body>
    <?php echo leetSpeak('ADNENSAID'); ?>
</body>

</html>