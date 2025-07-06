<?php
require("../requireAll.php");

function createProfile($mysqli) {
    $user_info={
        $age = $_POST['age']?? '';
        $name = $_POST['name']?? '';
        $email = $_POST['email']?? '';
        $address = $_POST['address']?? '';
        $password = $_POST['password']?? '';
    }

    $sql = create($mysqli, $user_info);
    if ($sql)
    {
        return "done successfully!"
    }
    else {
        return "Error";
    }

}

?>
}

