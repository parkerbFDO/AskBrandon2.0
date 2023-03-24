<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    // Do something with the $data, for example store it in a database or send it via email
    // ...

    // Send a success response
    header('Content-Type: application/json');
    echo json_encode(['status' => 'success']);
} else {
    // Send a method not allowed response
    header('HTTP/1.1 405 Method Not Allowed');
    header('Allow: POST');
    echo 'Method not allowed';
}
