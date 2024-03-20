<?php

require_once("base_functions.php");

$id = $_GET['id'];

$title = getNote($id)['title'];
$content = getNote($id)['content'];

?>

<!doctype html>
<html lang="en">
<head>
    <title>Заметка</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div><a href="index.php">назад</a></div>
<div>
    <label for="title">Заголовок</label><br>
    <input id="title" value="<?= $title ?>" /><br>
</div>
<div>
    <label for="content">Содержание</label><br>
    <input id="content" value="<?= $content ?>" /><br>
    <input class="change" type="button" value="изменить заметку" onclick="updateNote()" />
</div>
<div>
    <form method="post" action="destroy.php?id=<?= $id ?>">
        <input class="delete" type="submit" value="удалить" />
    </form>
</div>
<script>
    function updateNote() {
        const id = '<?= $id ?>';
        const title = document.getElementById('title').value;
        const content = document.getElementById('content').value;

        const data = {
            id: id,
            title: title,
            content: content,
        }

        const fetchConfig = {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data)
        }

        fetch('./update.php', fetchConfig)
            .then(response => response.json())
            .then(responseData => {
                alert(responseData)
            })
    }
</script>
</body>
</html>