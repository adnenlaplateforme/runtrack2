<?php
$val = true;
echo "val est de type boolean <br>";
$val2 = "Hello";
echo $val2."= est une chaine de caracterer<br>";
$val3 = 3;
echo $val3." = est un entier<br>";
$val4 = 3.5;
echo $val4."= est un type float";
echo "
<table>
<thead>
<tr>
<th scope='col'>type</th>
<th scope='col'>nom</th>
<th scope='col'>valeur</th>
</tr>
<tbody>
<tr>
<th>String</th>
<th>val2</th>
<th> $val2 </th>
</tr>
<tr>
<th>Int</th>
<th>val3</th>
<th> $val3 </th>
</tr>
<tr>
<th>Float</th>
<th>val4</th>
<th> $val4 </th>
</tr>
</tbody>
</thead>
</table>"
?>