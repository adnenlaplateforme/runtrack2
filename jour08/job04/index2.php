<?php
session_start();
$user = (object) [
    'prenom' => '',
    'isconnect' => 0,
];
setcookie("user", json_encode($user), time() + 3600);

if (!isset($_COOKIE['user'])) {
    setcookie("user", json_encode($user), time() + 3600);
}

if (isset($_POST['logout'])) {
    $user->prenom = "";
    $user->isconnect = 0;
    setcookie("user", json_encode($user), time() - 3600);
    header('Location: ?');
    exit();
}
if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
    $prenom = htmlspecialchars($_POST['prenom']);
    $user = json_decode($_COOKIE['user']);
    $user->prenom = $prenom;
    $user->isconnect = 1;
    setcookie("user", json_encode($user), time() + 3600);
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
    <?php if (!empty($user->prenom)): ?>
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