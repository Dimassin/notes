<?php

require_once("base_functions.php");

$id = $_GET['id'];

deleteNote($id);

header('Location: ./index.php');