<!doctype html>
<html lang="en">
<head>
    <title>Создание поста</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div><a href="index.php">назад</a></div>
    <div>
        <label for="title">Заголовок</label><br>
        <input id="title"/><br>
    </div>
    <div>
        <label for="content">Содержание</label><br>
        <input id="content"/><br>
    </div>
    <div><input type="button" value="добавить заметку" onclick="addNote()"/></div>
<script>
    function addNote() {
        const title = document.getElementById('title').value;
        const content = document.getElementById('content').value;

        const data = {
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

        fetch('./store.php', fetchConfig)
            .then(response => response.json())
            .then(responseData => {
                alert(responseData)
            })
    }
</script>
</body>
</html>