<?php

    $server="localhost";
    $username="root";
    $password="";
    $database="try_new";

    $conn=mysqli_connect($server,$username,$password,$database);

    if ($conn === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

?>