<?php

    require('./_init.php');
    session_unset();
    session_destroy();
    header("location: ./login.php");
    exit;
    
?>