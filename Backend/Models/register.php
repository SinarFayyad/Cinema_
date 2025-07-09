<?php

require("../Connection/connection.php");

$email = $_POST['email']?? '';

$stmt = $mysqli->prepare("SELECT email FROM users WHERE email =?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result()->fetch_assoc();

if ($result== null)
{
    $user_info = [
        'name' = $_GET['name']?? '';
        'password' = $_GET['password']?? '';
        'address' = $_GET['address']?? '';
        'age' = $_GET['age']?? '';
    ];

    User::create($mysqli , 'User', $user_info);

    if ($stmt->execute()) {
        header("Location: ../../Frontend/index.html");
        // redierct to js or let it as it is ?
    } else {
        echo "Error: ". $stmt->error;
    }

}else {
    echo "This email already exist! Try to login!";
    // header("Location: ../../Frontend/pages/login.html");
    // to js then to html 
}

?>
