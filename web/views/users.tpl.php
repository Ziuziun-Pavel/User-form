<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php if (!empty($pageData)) {
            echo $pageData['title'];
        } ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="center">
    <ul class="nav nav-tabs navmenu">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="http://localhost/form-users/web/#">Add user</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="http://localhost/form-users/web/users">List of users</a>
        </li>
    </ul>
</header>

<div class="container mt-5">
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Full Name</th>
                            <th>E-mail</th>
                            <th>Gender</th>
                            <th>Status</th>
                            <th>Edit/Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($pageData['users'] as $key => $value) {
                            $buttonDelete = '<button type="button" class="btn btn-danger" onclick="deleteUser('. $value['id'] . ')">Delete</button>';
                            $buttonEdit = '<button type="button" class="btn btn-primary" onclick="editPage('. $value['id'] . ')">Edit</button>';

                            echo "<tr>";
                            echo "<td>" . $value['id'] . "</td>";
                            echo "<td>" . $value['fullName'] . "</td>";
                            echo "<td>" . $value['email'] . "</td>";
                            echo "<td>" . $value['gender'] . "</td>";
                            echo "<td>" . $value['status'] . "</td>";
                            echo "<td> $buttonDelete $buttonEdit </td>";
                            echo "<tr>";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal hidden">
    <h4>Вы хотите удалить это задание?</h4>
    <button class="cancel">Отмена</button>
    <button class="confirm">Удалить</button>
</div>

<script src="js/script.js"></script>
<script src="js/users.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>


