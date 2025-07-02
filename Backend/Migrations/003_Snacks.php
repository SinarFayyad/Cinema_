<?php
require("../Connection/connection.php");

$query = "CREATE TABLE snacks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    size VARCHAR(50) NOT NULL,
    price DECIMAL(5,2) NOT NULL,
    available BOOLEAN
)";

$execute = $mysqli->prepare($query);
$execute->execute();

?>
