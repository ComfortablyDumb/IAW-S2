<?php
    $_SESSION = array();
    session_destroy();
    session_regenerate_id(TRUE);
    header("Location: http://localhost/adw/php-tp3/exo2/signin.php");
    exit();
    
?>
