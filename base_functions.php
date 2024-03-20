<?php

require_once("database.php");

function getNotes() {
    global $connection;
    $query = "select id, title from notes";
    $stmt = $connection->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function getNote($id) {
    global $connection;
    $query = "select title, content from notes where id = :id";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function createNote($title, $content) {
    global $connection;
    $current_date = date("Y:m:d H:i:s");
    $query = "insert into notes(title, content,created_at) values(:title, :content, :created_at)";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':content', $content);
    $stmt->bindParam(':created_at', $current_date);
    $stmt->execute();
}

function deleteNote($id) {
    global $connection;
    $query = "delete from notes where id = :id";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}

function updateNote($id, $title, $content) {
    global $connection;
    $query = "update notes set title = :title, content = :content where id = :id";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':content', $content);
    $stmt->execute();
}