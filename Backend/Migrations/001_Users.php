<?php

require("../Connection/connection.php");

$query = "CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT,
    email VARCHAR(250) NOT NULL UNIQUE,
    password VARCHAR(250) NOT NULL,
    address VARCHAR(100) NOT NULL,
    price DECIMAL(5,2) NOT NULL
)";

$execute = $mysqli->prepare($query);
$execute->execute();

?>