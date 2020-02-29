<?php
    include "pswd.php";
    $conn = connect();
    $pswd = 'sashalox';
    $hash = password_hash($pswd, PASSWORD_DEFAULT);
    $res = $conn->query("INSERT INTO persons (pswd, name) VALUES ('$hash', 'test')");
    $result = $conn->query("SELECT * FROM persons WHERE name = 'test'");
    while($row = $result->fetch_assoc()) {
        $hash = $row['pswd'];
    }
    if(password_verify($pswd, $hash))
    {
        echo "true";
    } else {
        echo "false";
    }
    $conn->close();
?>