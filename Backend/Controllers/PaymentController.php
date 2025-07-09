<?php 

require("UtilityController.php");
require("./Models/Payment.php");

class PaymentController {
    function createPayment($mysqli) 
    {
        $payment_info = [
            'amount' => $_GET['amount'] ?? '',
            'method' => $_GET['method'] ?? '',
            'user_id' => $_GET['user_id'] ?? ''
        ];

        $sql = createData($mysqli,'Payment', $payment_info);
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
            return updateDataByID($mysqli, 'Payment', $data, $id); 
            
        } 
        echo "No identifier or data provided for update.";
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
}