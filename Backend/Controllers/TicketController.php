<?php
require("UtilityController.php");

function createTicket($mysqli) 
{
    $ticket_info = [
        'seat_id'=> $_POST['seat_id']?? '',
        'user_name'=> $_POST['user_name']?? '',
        'movie_name'=> $_POST['movie_name']?? '',
        'movie_price'=> $_POST['movie_price']?? '',
        'snacks_price'=> $_POST['snacks_price']?? '',
        'screening_time'=> $_POST['screening_time']?? ''
    ];

    $sql = create($mysqli, $ticket_info);
}

function getTickets($mysqli) 
{
    if (isset($_GET['user_name'])) {
        $name = $_GET['user_name'];
        fetchByName($mysqli, 'Ticket', $name);
        
    } 
    elseif (isset($_GET['id'])) 
    {
        $id = $_GET['id'];
        fetchByID($mysqli, 'Ticket', $id);
    } 
    else 
    {
        fetchAll($mysqli, 'Ticket');
    }
}

function updateTicket($mysqli) 
{
    if (isset($_GET['user_name']) && isset($_POST['data'])) 
    {
        $name = $_GET['user_name'];
        $data = json_decode($_POST['data'], true);
        updateDataByName($mysqli, 'Ticket', $data, $name);
        
    } 
    elseif (isset($_GET['id']) && isset($_POST['data'])) 
    {
        $id = $_GET['id'];
        $data = json_decode($_POST['data'], true);
        updateDataByID($mysqli, 'Ticket', $data, $id);
        
    } 
    else 
    {
        echo "No identifier or data provided for update.";
    }
}

function deleteTicket($mysqli) 
{
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        deleteDataByID($mysqli, 'Ticket', $id);
    } 
    elseif (isset($_GET['user_name'])) 
    {
        $name = $_GET['user_name'];
        deleteDataByName($mysqli, 'Ticket', $name);
    } 
    else 
    {
        echo "No identifier provided for deletion.";
    }
}

?>