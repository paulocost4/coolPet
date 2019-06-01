<?php

    if (!isset($_SESSION)) {
        session_start();
        session_destroy();
        header("location: index.php");

    }
    else {
        session_destroy();
        header("location: index.php");
    }
    


?>