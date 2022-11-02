function submitForm(e) {
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

            //make sure to serialize your JSON body
            body: JSON.stringify({
                id: id
            })
        })
            .then( (response) => {
                window.location = `http://localhost/form-users/web/users/deleteUser/?id=${id}`;
            });
    }

}

function editUser(id) {
    console.log(id);
    window.location = `http://localhost/form-users/web/users/editUser/?id=${id}`;
}

