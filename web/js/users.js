function addUser(e) {
    e.preventDefault()
    var xhr = new XMLHttpRequest();

    var name = document.getElementById("form_name").value;
    var email = document.getElementById("form_email").value;
    var gender = document.getElementById("form_gender").value;
    var status = document.getElementById("form_status").value;
    var dataString = 'name1=' + name + '&email1=' + email + '&gender1=' + gender + '&status1=' + status;


    xhr.open("POST", 'http://localhost/form-users/web/', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.send(dataString);
}

function deleteUser(id) {
    if(confirm('You are sure?')) {
        fetch("http://localhost/form-users/web/users/deleteUser", {
            method: "post",
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/x-www-form-urlencoded'
            },

            body: JSON.stringify({
                id: id
            })
        })
            .then( (response) => {
                window.location = `http://localhost/form-users/web/users/deleteUser/?id=${id}`;
            });
    }

}

function editPage(id) {
    window.location = `http://localhost/form-users/web/users/editPage/?id=${id}`;
}

function submitEditUser(e) {
    var name = document.getElementById("form_name").value;
    var email = document.getElementById("form_email").value;
    var gender = document.getElementById("form_gender").value;
    var status = document.getElementById("form_status").value;

    fetch(`http://localhost/form-users/web/users/updateUserData`, {
        method: "post",
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/x-www-form-urlencoded'
        },

        body: JSON.stringify({
            name: name,
            email: email,
            status: status,
            gender: gender,
        })
    })
        .then( (response) => {
            window.location = `http://localhost/form-users/web/users/updateUserData`;
        });

}
