<?php 

require("UtilityController.php");


function createPayment($mysqli) 
{
    $payment_info = [
        'amount' => $_POST['amount'] ?? '',
        'method' => $_POST['method'] ?? '',
        'user_id' => $_POST['user_id'] ?? ''
    ];

    $sql = create($mysqli, $payment_info);
    return $sql;
}

function getPayments($mysqli) 
{
    if (isset($_GET['id'])) 
    {
        $id = $_GET['id'];
        fetchByID($mysqli, 'Payment', $id); 
    } 
    else 
    {
        fetchAll($mysqli, 'Payment');
    }
}

function updatePayment($mysqli) 
{
    if (isset($_GET['id']) && isset($_POST['data'])) 
    {
        $id = $_GET['id'];
        $data = json_decode($_POST['data'], true);
        updateDataByID($mysqli, 'Payment', $data, $id); 
    } 
    else 
    {
        echo "No identifier or data provided for update.";
    }
}

function deletePayment($mysqli) 
{
    if (isset($_GET['id'])) 
    {
        $id = $_GET['id'];
        deleteDataByID($mysqli, 'Payment', $id);
    } 
    else 
    {
        echo "No identifier provided for deletion.";
    }
}