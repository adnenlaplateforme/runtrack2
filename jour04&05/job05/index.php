<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job05</title>
</head>

<body>
    <form action="#" method="post">
        <input type="text" name="username" id="username" placeholder="username">
        <input type="password" name="password" id="password" placeholder="password">
        <input type="submit" value="Se connecter">
    </form>
</body>

</html>
<?php
if (isset($_POST["username"]) && isset($_POST["password"])) {
    if ($_POST["username"] === "john" && $_POST["password"] === "Rambo") {
        echo "C'est pas ma guerre";
    } else {
        echo "Votre pire cauchemar";
    }
}
