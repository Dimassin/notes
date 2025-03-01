<?php

$test = 50;
echo 'test value equals ' . $test;

$dataPath = 'data.json';

if (file_exists($dataPath)) {
    $jsonContacts = file_get_contents($dataPath);
    $contacts = json_decode($jsonContacts, true);
} else {
    echo "файл с данными не найден";
    exit;
}

?>

<!doctype html>
<html lang="ru">
<head>
    <title>Контакты</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div><a href="create.php">Добавить контакт</a></div>
    <div>
        <ol>
            <?php
            for ($i = 0; $i < count($contacts); $i++) {
                $id = $i;
                $name = $contacts[$i]['name'];
                $number = $contacts[$i]['phoneNumber'];

                echo "<li> <span> $name </span> <span> $number </span> <button id='$id' class='delete'>удалить</button></li>";
            }
            ?>
        </ol>
    </div>
    <script src="scripts/remove_contact.js"></script>
</body>
</html>