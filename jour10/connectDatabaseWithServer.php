<?php
function connectDatabaseWithServer($servername, $username, $password, $dbname)
{
    // connect the database with server

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_errno) {
        echo "Failed to connect to MySQL :" . $conn->connect_errno;
        exit();
    }
    return $conn;
}
