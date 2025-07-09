<?php 

echo "Index_ ";

$base_dir = "/projects/Cinema_/Backend";
// testing: echo ($base_dir . "\n");
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
//testing: echo ($request. "\n");


if (strpos($request, $base_dir) === 0) {
    $request = substr($request, strlen($base_dir));
}

if ($request == '') {
    $request = '/';
}

//testing: echo "Request: {$request}\n";

require("routes/api.php");


if (isset($apis[$request])) {
    
    $controller_name = $apis[$request]['controller'];  
    $method = $apis[$request]['method'];
    require "Controllers/{$controller_name}.php";

    //testing: echo "Controller: {$controller_name}, Method: {$method}\n";

    $controller = new $controller_name();
    
    //testing: echo"\nController: {$controller_name}, Method: {$method}\n";

    if (method_exists($controller, $method)) {
        $controller->$method($mysqli);
    } else {
        echo "Error: Method {$method} not found in {$controller_name}.";
    }
} else {
    echo "404 Not Found";
}