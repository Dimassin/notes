<?php

$host = 'localhost';
$db_name = 'notes_db';
$username = 'root';
$password = '';

$connection = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);