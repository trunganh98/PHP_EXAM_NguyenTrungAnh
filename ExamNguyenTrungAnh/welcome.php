<?php
    require_once "conn.php";
    if (isset($_COOKIE['username']))
        echo "Welcome ".$_COOKIE['fullname'];

?>