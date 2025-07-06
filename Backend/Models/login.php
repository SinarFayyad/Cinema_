<?php

require("../Connection/connection.php");
$email = $_POST['email']?? '';
$password = $_POST['password']?? '';

$stmt = $mysqli->prepare("SELECT password FROM users WHERE email =?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result()->fetch_assoc();

if ($result== null)
{
    echo  "User not found. Register!";
    // header("Location: ../../Frontend/pages/register.html");
    // i should redirect to the js code that will show an alert that the user has to register 
}
else if ($password == $result['password']) {
    header("Location: ../../Frontend/index.html");
    // maybe i should redirect to the js code or maybe it's fine to let it here ?
} 
else{
    echo "Incorrect password.";
    //header("Location: ../../Frontend/pages/login.html");
    // go to js code then show an alert that the password is incorrect
}
  
?>


