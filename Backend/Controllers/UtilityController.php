<?php

echo "Controllers_ ";
require("requireAll.php");



function createData(mysqli $mysqli, string $modelName, array $data)
{
    $response = [];
    $response["status"] = 200;

    new $modelName($data);
    echo" Created succssfully_ ";

    $item = $modelName::create($mysqli, $data);
    
    echo "Item created_ ";
    if ($item) {
        $response["item"] = $item->toArray();
    } else {
        $response["status"] = 500;
        $response["message"] = "Failed to create item.";
    }

    echo json_encode($response);
    return;
}

function fetchAll(mysqli $mysqli, string $modelName)
{
    $response = [];
    $response["status"] = 200;

    $allItems = $modelName::getAll($mysqli);
    $response["allItems"] = [];
    foreach ($allItems as $item) {
        $response["allItems"][] = $item->toArray();
    } 
    echo json_encode($response);
    return;

}

function fetchByName(mysqli $mysqli, string $modelName, string $name)
{
    $response = [];
    $response["status"] = 200;

    $items = $modelName::findByName($mysqli, $name);
    $response["items"][] = $item->toArray();

    echo json_encode($response);
    return;
    
}

function fetchByID( mysqli $mysqli, string $modelName, int $id)
{ 
    $response = [];
    $response["status"] = 200;

    $item = $modelName::findByID($mysqli, $id);
    $response["item"] = $item->toArray();

    echo json_encode($response);
    return;

}    

function updateDataByName(mysqli $mysqli, string $tableName, array $data, string $name)
{
    $item = $tableName::findByName($mysqli, $name);
    if($item){
        $item->update($mysqli, $data);
        return;
    }
}

function updateDataByID(mysqli $mysqli, string $tableName, array $data, int $id)
{
    $item = $tableName::findByID($mysqli, $id);
    if($item){
        $item->update($mysqli, $data);
        return;
    }
}

function deleteDataByName(mysqli $mysqli,string $tableName, string $name)
{
    $item = $tableName::findByName($mysqli, $name);
    if (!$item) {
        $item = $tableName::delete($mysqli, $name);
    }
    return;
}

function deleteDataByID(mysqli $mysqli, string $tableName, int $id)
{
    $item = $tableName::findByID($mysqli, $id);
    if ($item) {
        $item = $tableName::delete($mysqli, $id);
    }
    return;
}
?>