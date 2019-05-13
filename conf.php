<?php

    $con = new mysqli("localhost", "root", "", "CoolPet");

    if($con->connect_error)
    {
        echo "Erro ao conectar: " .$con->connect_error . "<br>";

    }

?>