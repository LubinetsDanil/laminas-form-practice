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
