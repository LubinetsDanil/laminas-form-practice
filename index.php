<?php


// Views and Actions for GET requests
function get_request1()
{
    return json_encode(['message' => 'This is a GET request 1']);
}

function get_request2()
{
    return json_encode(['message' => 'This is a GET request 2']);
}

function get_request3()
{
    return json_encode(['message' => 'This is a GET request 3']);
}

function get_request4()
{
    return json_encode(['message' => 'This is a GET request 4']);
}

function get_request5()
{
    return json_encode(['message' => 'This is a GET request 5']);
}

// Views and Actions for POST requests
function post_request1()
{
    $data = !empty($_POST['data']) ? $_POST['data'] : null;
    return json_encode(['message' => "This is a POST request 1 with data: $data"]);
}

function post_request2()
{
    $data = !empty($_POST['data']) ? $_POST['data'] : null;
    return json_encode(['message' => "This is a POST request 2 with data: $data"]);
}

function post_request3()
{
    $data = !empty($_POST['data']) ? $_POST['data'] : null;
    return json_encode(['message' => "This is a POST request 3 with data: $data"]);
}

function post_request4()
{
    $data = !empty($_POST['data']) ? $_POST['data'] : null;
    return json_encode(['message' => "This is a POST request 4 with data: $data"]);
}

function post_request5()
{
    $data = !empty($_POST['data']) ? $_POST['data'] : null;
    return json_encode(['message' => "This is a POST request 5 with data: $data"]);
}

// Отримати поточний маршрут із запиту
$route = $_GET['route'] ?? '';

// Маршрути для GET-запитів
$routes['get_request1'] = 'get_request1';
$routes['get_request2'] = 'get_request2';
$routes['get_request3'] = 'get_request3';
$routes['get_request4'] = 'get_request4';
$routes['get_request5'] = 'get_request5';

// Маршрути для POST-запитів
$routes['post_request1'] = 'post_request1';
$routes['post_request2'] = 'post_request2';
$routes['post_request3'] = 'post_request3';
$routes['post_request4'] = 'post_request4';
$routes['post_request5'] = 'post_request5';

// Перевірити, чи існує маршрут у визначених маршрутах
if (array_key_exists($route, $routes)) {
    // Викликати відповідну функцію перегляду/дії
    echo $routes[$route]();
} else {
    // Обробити випадок, коли маршрут не існує
    echo json_encode(['error' => 'Маршрут не знайдено']);
}
