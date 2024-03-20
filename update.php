<?php

$rawData = file_get_contents('php://input');

$data = json_decode($rawData, true);

header('Content-Type: application/json');

require_once("base_functions.php");

updateNote($data['id'], $data['title'],$data['content']);

echo json_encode('изменено');
