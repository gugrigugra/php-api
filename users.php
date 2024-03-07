<?php

//aggiungi informazioni per gli users

$users = [
    ['id' => 1, 'name' => 'John Doe', 'email' => 'jhon@gmail.com', 'phone' => '1234567890', 'address' => 'Via Roma 1', 'city' => 'Roma', 'state' => 'RM', 'zip' => '00100'],
    ['id' => 2, 'name' => 'Mario Rossi', 'email' => 'mariorossi@gmail.com', 'phone' => '1234567890', 'address' => 'Via Roma 1', 'city' => 'Roma', 'state' => 'RM', 'zip' => '00100'],
    ['id' => 3, 'name' => 'Luca Verdi', 'email' => 'lucaverdi@gmail.com', 'phone' => '1234567890', 'address' => 'Via Roma 1', 'city' => 'Roma', 'state' => 'RM', 'zip' => '00100'],
    ['id' => 4, 'name' => 'Paolo Bianchi', 'email' => 'paolobianchi@gmail.com', 'phone' => '1234567890', 'address' => 'Via Roma 1', 'city' => 'Roma', 'state' => 'RM', 'zip' => '00100'],
];

$status = 200;
$message = "OK";

// Controlla se ci sono utenti nel data source
if (empty($users)) {
    $status = 404;
    $message = "Not Found";
    $users = null;
}

http_response_code($status);
header('Content-Type: application/json');

$response = [
    "status" => $status,
    "message" => $message,
    "payload" => $users,
];



echo json_encode($response);

exit;

?>