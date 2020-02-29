<?php
    session_start();
    if ($_COOKIE['active'] or $_SESSION['active']) {
        
    } else {
        echo "<meta http-equiv=\"refresh\" content=\"1;URL=http://localhost/assets/php/login.php\">";
    }
?>