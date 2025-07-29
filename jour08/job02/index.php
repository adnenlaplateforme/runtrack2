<?php
if (!isset($_COOKIE["visit"])) {
    incrementVisitCount();
    setcookie("visit", true, time() + 86400); //expire dans un jour
}
$count = getVisitCount();

function incrementVisitCount()
{
    $count = intval(file_get_contents("visit-count.txt"));
    file_put_contents("visit-count.txt", $count + 1, LOCK_EX);
}

function getVisitCount()
{
    return file_get_contents("visit-count.txt");
}
function ResetCounter()
{
    file_put_contents("visit-count.txt", -1, LOCK_EX);
    header('Location: ?');
    exit;
}
if (isset($_GET["reset"])) {
    ResetCounter();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job01</title>
</head>

<body>
    <span>Nombre de visiteurs : <?= $count ?> </span>
    <form action="#" method="get">
        <input type="submit" name="reset" value="Reset">
    </form>
    <div>
    </div>
</body>

</html>