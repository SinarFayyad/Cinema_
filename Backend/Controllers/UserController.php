<?php
require("UtilityController.php");
require("./Models/User.php");

Class UserController {

    function createProfile($mysqli) {

        $user_info=[
            'age' => $_GET['age']?? '',
            'name' => $_GET['name']?? '',
            'email' => $_GET['email']?? '',
            'address' => $_GET['address']?? '',
            'password' => $_GET['password']?? ''
        ];

        $sql = createData($mysqli, 'User', $user_info);

    }

    function getUsers($mysqli) 
    {
        if (isset($_GET['name'])) {
            $name = $_GET['name'];
            fetchByName($mysqli, 'User', $name);
        } 
        elseif (isset($_GET['id'])) 
        {
            $id = $_GET['id'];
            fetchByID($mysqli, 'User', $id);
        } 
        else 
        {
            fetchAll($mysqli, 'User');
        }
    }

    function updateProfile($mysqli) 
    {
        if (isset($_GET['name']) && isset($_POST['data'])) {
            $name = $_GET['name'];
            $data = json_decode($_POST['data'], true);
            updateDataByName($mysqli, 'User', $data, $name);
            
        } 
        elseif (isset($_GET['id']) && isset($_POST['data'])) 
        {
            $id = $_GET['id'];
            $data = json_decode($_POST['data'], true);
            updateDataByID($mysqli, 'User', $data, $id);
            
        } 
        else 
        {
            echo "No identifier or data provided for update.";
        }
    }

    function deleteProfile($mysqli) 
    {
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            deleteDataByID($mysqli, 'User', $id);
        } 
        elseif (isset($_GET['name'])) 
        {
            $name = $_GET['name'];
            deleteDataByName($mysqli, 'User', $name);
        } 
        else 
        {
            echo "No identifier provided for deletion."; 
        
        }
    }
}
?>