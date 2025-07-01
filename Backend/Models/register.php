<?php

require("../Connection/connection.php");

$email = $_POST['email']?? '';

$stmt = $mysqli->prepare("SELECT email, password FROM users WHERE email =?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()== null)
{
    $name = $_POST['name']?? '';
    $password = $_POST['password']?? '';
    $address = $_POST['address']?? '';
    $age = $_POST['age']?? '';

    $stmt = $mysqli->prepare("INSERT INTO users (name, email, password,address, age) VALUES (?,?,?,?,?)");
    $stmt->bind_param("sssss", $name, $email,$password ,$address, $age);


    if ($stmt->execute()) {
        header("Location: ../../Frontend/index.html");
    } else {
        echo "Error: ". $stmt->error;
    }
}else {
    echo "This email already exist! Try to login!";
    header("Location: ../../Frontend/pages/login.html");
}

?>
