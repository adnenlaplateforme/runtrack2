<?php
function selectData($sql)
{
    $conn = connectDatabaseWithServer("localhost", "root", "", "jour09");
    $result = $conn->query($sql);
    if ($result) {
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
        //$json = json_encode($row);
        return $row;
    } else {
        echo "Erreur :" . $conn->error;
    }
}
