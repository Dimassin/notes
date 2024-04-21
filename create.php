<!doctype html>
<html>
<head>
    <title>Добавление контакта</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div><a href="index.php">назад</a></div>
    <div>
        <label for="name">ФИО:</label><br>
        <input id="name"/><br>
    </div>
    <div>
        <label for="phoneNumber">Номер телефона:</label><br>
        <input type="number" id="phoneNumber"/><br>
    </div>
    <div><input type="button" value="добавить контакт" onclick="addContact()"/></div>
<script src="scripts/validate.js"></script>
<script src="scripts/add_contact.js"></script>
</body>
</html>