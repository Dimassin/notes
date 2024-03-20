<?php

require_once("base_functions.php");

$notes = getNotes();

?>

<!doctype html>
<html lang="en">
<head>
    <title>Главная</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div><a href="create.php">Сделать заметку</a></div>
    <div>
        <ol>
            <?php
            foreach ($notes as $note) {
                $id = $note['id'];
                $title = $note['title'];
                echo "<li><a href='show.php?id=$id'> $title </a></li>";
            }
            ?>
        </ol>
    </div>
</body>
</html>