<?php

    $host = "localhost";
    $user  = "Gerard";
    $password = "Vanguard7Alpha#";
    $dbname = "debts";

    $conn = mysqli_connect($host, $user, $password, $dbname);

    if(!$conn) {
        die ("Connection Failed: ".mysqli_connect_error());
    }

    //echo "Connection Successful";
