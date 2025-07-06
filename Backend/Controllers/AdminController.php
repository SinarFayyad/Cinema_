<?php 
require("UtilityController.php");

function createAdmin($mysqli) 
{
    $admin_info = [
        'name' => $_POST['name'] ?? '',
        'email' => $_POST['email'] ?? '',
        'password' => $_POST['password'] ?? ''
    ];

    $sql = create($mysqli, $admin_info);
    return $sql;
}

function getAdmins($mysqli) 
{
    if (isset($_GET['name'])) 
    {
        $name = $_GET['name'];
        fetchByName($mysqli, 'Admin', $name);
    } 
    elseif (isset($_GET['id'])) 
    {
        $id = $_GET['id'];
        fetchByID($mysqli, 'Admin', $id);
    } 
    else 
    {
        fetchAll($mysqli, 'Admin');
    }
}

function updateAdmin($mysqli) 
{
    if (isset($_GET['name']) && isset($_POST['data'])) 
    {
        $name = $_GET['name'];
        $data = json_decode($_POST['data'], true);
        updateDataByName($mysqli, 'Admin', $data, $name);
    } 
    elseif (isset($_GET['id']) && isset($_POST['data'])) 
    {
        $id = $_GET['id'];
        $data = json_decode($_POST['data'], true);
        updateDataByID($mysqli, 'Admin', $data, $id);
    } 
    else 
    {
        echo "No identifier or data provided for update.";
    }
}

function deleteAdmin($mysqli) 
{
    if (isset($_GET['id'])) 
    {
        $id = $_GET['id'];
        deleteDataByID($mysqli, 'Admin', $id);
    } 
    elseif (isset($_GET['name'])) 
    {
        $name = $_GET['name'];
        deleteDataByName($mysqli, 'Admin', $name);
    } 
    else 
    {
        echo "No identifier provided for deletion.";
    }
}
