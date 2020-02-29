<?php
function connect()
{
    $conn = new mysqli("localhost", "root", "", "buyyerlist");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}
?>