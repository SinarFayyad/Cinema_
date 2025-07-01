<?php
require("requireAll.php");

function deleteData(msqli $mysqli,string $tableName){

    $response = [];
    $response["status"] = 200;

    $name = $_GET["name"];
    $item = $tableName::delete($mysqli, $name);
    $item = $tableName::findByName($mysqli, $name);
    $response["item"] = $item->toArray();

    echo json_encode($response);
    return;
}

?>