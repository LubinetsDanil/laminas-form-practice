<?php

require 'Message.php';

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

// Отримати поточний маршрут із запиту
$route = isset($_GET['route']) ? $_GET['route'] : '';

// Перевірити, чи існує маршрут у визначених маршрутах
if (array_key_exists($route, $routes)) {
    // Викликати відповідну функцію перегляду/дії
    echo $routes[$route]();
} else {
    // Обробити випадок, коли маршрут не існує
    echo json_encode(['error' => 'Маршрут не знайдено']);
}
