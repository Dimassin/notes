<?php

$rawData = file_get_contents('php://input');

$data = json_decode($rawData, true);

header('Content-Type: application/json');

$dataPath = 'data.json';

if (file_exists($dataPath)) {
    $jsonContacts = file_get_contents($dataPath);
    $contacts = json_decode($jsonContacts, true);

    unset($contacts[$data['position']]);

    $jsonContacts = json_encode($contacts, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

    file_put_contents($dataPath, $jsonContacts);
} else {
    echo json_encode('файл с данными не найден');
    exit;
}

echo json_encode('контакт успешно удалён');