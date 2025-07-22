<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job05</title>
    <link rel="stylesheet" href=<?php echo $_GET['style']; ?>>
</head>

<body>
    <form action="" method="get">
        <select name="style" id="style">
            <option value="default">Select style</option>
            <option value="style1">style1</option>
            <option value="style2">style2</option>
            <option value="style3">style3</option>
        </select>
        <input type="submit" value="Envoyer">
    </form>
</body>

</html>