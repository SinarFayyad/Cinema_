<?php 

require("../requireAll.php");
require("UtilityController.php");

function createSnack($mysqli) 
{
    $snack_info = [
        'name' => $_POST['name'] ?? '',
        'price' => $_POST['price'] ?? '',
        'quantity' => $_POST['quantity'] ?? ''
    ];

    $sql = create($mysqli, $snack_info);
    return $sql;
}

function getSnacks($mysqli) 
{
    if (isset($_GET['name'])) 
    {
        $name = $_GET['name'];
        fetchByName($mysqli, 'Snack', $name);
    } 
    elseif (isset($_GET['id'])) 
    {
        $id = $_GET['id'];
        fetchByID($mysqli, 'Snack', $id); 
    } 
    else 
    {
        fetchAll($mysqli, 'Snack');
    }
}

function updateSnack($mysqli) {
    if (isset($_GET['name']) && isset($_POST['data'])) 
    {
        $name = $_GET['name'];
        $data = json_decode($_POST['data'], true);
        updateDataByName($mysqli, 'Snack', $data, $name);
        
    } 
    elseif (isset($_GET['id']) && isset($_POST['data'])) 
    {
        $id = $_GET['id'];
        $data = json_decode($_POST['data'], true);
        updateDataByID($mysqli, 'Snack', $data, $id);
    } 
    else 
    {
        echo "No identifier or data provided for update.";
    }
}

function deleteSnack($mysqli) {
    if (isset($_GET['id'])) 
    {
        $id = $_GET['id'];
        deleteDataByID($mysqli, 'Snack', $id);
    } 
    elseif (isset($_GET['name'])) 
    {
        $name = $_GET['name'];
        deleteDataByName($mysqli, 'Snack', $name);
    } 
    else 
    {
        echo "No identifier provided for deletion.";
    }
}
