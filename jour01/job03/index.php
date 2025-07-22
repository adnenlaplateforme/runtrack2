<?php
$val = true;
echo "val est de type boolean <br>";
$val2 = "Hello";
echo $val2 . "= est une chaine de caracterer<br>";
$val3 = 3;
echo $val3 . " = est un entier<br>";
$val4 = 3.5;
echo $val4 . "= est un type float";
$varBool = true;
$varInt = 3;
$varFloat = 3.5;
$varString = 'Bonjour';
$variables = [
    'varBool' => $varBool,
    'varInt' => $varInt,
    'varString' => $varString,
    'varFloat' => $varFloat
];
include "table.html";
?>
<table>
    <thead>
        <tr>
            <th scope="col">Type des variables</th>
            <th scope="col">Nom des variables</th>
            <th scope="col">Valeurs</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($variables as $name => $value): ?>
            <tr>
                <td> <?php echo gettype(($value)); ?> </td>
                <td> <?php echo $name; ?> </td>
                <td>
                    <?php
                    if (is_bool($value)) {
                        echo $value ? 'true' : 'false';
                    } else {
                        echo htmlspecialchars((string) $value);
                    }
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>