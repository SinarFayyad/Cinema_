<?php

require("../requireAll.php");
require("UtilityController.php");

function createSeat($mysqli) 
{
    $seat_info = [
        'row' => $_POST['row'] ?? '',
        'number' => $_POST['number'] ?? '',
        'is_available' => $_POST['is_available'] ?? ''
    ];

    $sql = create($mysqli, $seat_info);
    return $sql;
}

function getSeats($mysqli) 
{
    if (isset($_GET['id'])) 
    {
        $id = $_GET['id'];
        fetchByID($mysqli, 'Seat', $id); 
    } 
    else 
    {
        fetchAll($mysqli, 'Seat');
    }
}

function updateSeat($mysqli) 
{
    if (isset($_GET['id']) && isset($_POST['data'])) 
    {
        $id = $_GET['id'];
        $data = json_decode($_POST['data'], true);
        updateDataByID($mysqli, 'Seat', $data, $id); 
    } 
    else 
    {
        echo "No identifier or data provided for update.";
    }
}   

function deleteSeat($mysqli) 
{
    if (isset($_GET['id'])) 
    {
        $id = $_GET['id'];
        deleteDataByID($mysqli, 'Seat', $id);
    } 
    else 
    {
        echo "No identifier provided for deletion.";
    }
}