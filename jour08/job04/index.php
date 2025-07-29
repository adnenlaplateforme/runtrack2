<?php
session_start();
if (!isset($_COOKIE['prenom'])) {
    $_COOKIE['prenom'] = "";
}

if (isset($_POST['logout'])) {
    setcookie("prenom", "", time() - 3600);
    header('Location: ?');
    exit();
}
if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
    $prenom = htmlspecialchars($_POST['prenom']);
    $user = (object) [
        'prenom' => $prenom,
        'isconnect' => 1,
    ];
    setcookie("prenom", $prenom, time() + 3600);
}
var_dump($_COOKIE);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job04</title>
</head>

<body>
    <?php if (!empty($cookie)): ?>
        <div>
            <form action="#" method="post">
                <input type="submit" value="Se deconnecter" name="logout">
            </form>
        </div>
    <?php else : ?>
        <form action="#" method="post">
            <label for="fprenom">Prénom</label>
            <input type="text" name="prenom" id="fprenom">
            <input type="submit" value="Se connecter" id="Connexion">
        </form>
    <?php endif ?>

</body>

</html>