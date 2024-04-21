const buttons = document.getElementsByClassName('delete')

for (let i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener('click', function() {
        const data = {
            position: i
        }
    
        const fetchConfig = {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data)
        }
    
        fetch('./delete.php', fetchConfig)
            .then(response => response.json())
            .then(responseData => {
                buttons[i].parentNode.remove()

                alert(responseData)
            })
    })
}