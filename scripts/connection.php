<?php

    $connection = mysqli_connect("localhost","root","","InovaPreadmision");

    if (!$connection) {
        die("Error de conexión (".mysqli_connect_errno().")".mysqli_connect_error());
    } 

?>