function addContact() {
    const name = document.getElementById('name').value
    const phoneNumber = document.getElementById('phoneNumber').value

    if (!validate(name, phoneNumber)) {
        alert('введите данные') 
        return
    }

    const data = {
        name: name,
        phoneNumber: phoneNumber,
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