<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    //creating a connection

    $connection = new mysqli($servername, $username, $password);
    //checking database connectivity

    if ($connection->connect_error)
    {
        die("<h2>Kubaya msee!</h2><br><h1 style='color: red'>Not connected!</h1>".$connection->connect_error);
    }
    else
    {
        echo "<h2>Welcome Admin</h2> <br><h1 style='color: green'>Connection was successful!</h1>";
    }

?>
