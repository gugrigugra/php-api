<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>esempio</title>
</head>
<body>

<a href="#" id="fetchDataLink">clicca</a>

<script>
function fetchData() {
    fetch('users.php')
        .then(response => response.json())
        .then(data => {
            renderData(data);
            console.log(data);
        })
        .catch(error => console.error('Errore nella richiesta API:', error));
}

function renderData(users) {

    let userList = document.createElement('ul');

    users.payload.forEach(user => {
        let listItem = document.createElement('li');
        listItem.textContent = user.name + ' - ' + user.email + ' - ' + user.phone + ' - ' + user.address + ' - ' + user.city + ' - ' + user.state + ' - ' + user.zip;
        userList.appendChild(listItem);
    });

    document.body.appendChild(userList);
}

document.querySelector("#fetchDataLink").addEventListener('click', function(event) {
    event.preventDefault(); 
    fetchData();
});
</script>

</body>
</html>
