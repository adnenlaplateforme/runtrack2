<?php
session_start();
if (!isset($_POST['prenom'])) {
    $_SESSION['list_prenom'] = [];
} else if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
    $prenom = $_POST['prenom'];
    $_SESSION['list_prenom'][] = htmlspecialchars($prenom);
}
if (isset($_POST['reset'])) {
    $_SESSION['list_prenom'] = [];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job03</title>
</head>

<body>
    <form action="#" method="post">
        <label for="fprenom">Prénom</label>
        <input type="text" name="prenom" id="fprenom">
        <button name="reset" value="reset">Reset</button>
        <input type="submit" value="Envoyer" id="envoyer">
    </form>
    <ul>
        <?php
        if (isset($_SESSION['list_prenom'])) {
            foreach ($_SESSION['list_prenom'] as $key => $value) {
                echo '<li>' . $value . '</li>';
            }
        }
        ?>
    </ul>
</body>

</html>