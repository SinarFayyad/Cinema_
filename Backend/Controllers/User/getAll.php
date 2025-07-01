<?php

require("../requireAll.php");
function fetchData( msqli $mysqli, string $modelName)
{
    if (isset($_GET["id"])) {

        $id = $_GET["id"];
        $item = $modelName::findByID($mysqli, $id);
        $response["item"] = $item->toArray();

        echo json_encode($response);
        return;
    }
    else if (isset($_GET["name"])){
    $response = [];
    $response["status"] = 200;

    $name = $_GET["name"];
    $item = $modelName::findByName($mysqli, $name);
    $response["item"] = $item->toArray();

    echo json_encode($response);
    return;
    }
    else {
    $allItems = $modelName::all($mysqli);
    $response["allItems"] = [];
    foreach ($allItems as $item) {
        $response["allItems"][] = $item->toArray();
    
    echo json_encode($response);
    return;
    
    }
    }
}    
?>
    