<?php
$servername = "localhost";
$username = "root";
$password = "";
//creating a connection

$connection = new mysqli($servername, $username, $password);
//checking database connectivity

if ($connection->connect_error)
{
    die("<h2>Sorry!</h2><br><h1 style='color: red'>Not connected!</h1>".$connection->connect_error);
}
//Create Database
    $sql ="CREATE DATABASE webdev";
    if ($connection->query($sql)===TRUE)
    {
        echo "<h1 style='color: green'>Database successfully created</h1>";
    }
    else
    {
        echo "<h1 style='color: red'>Database Not created</h1>".$connection->error;
    }
    $connection->close();

?>
