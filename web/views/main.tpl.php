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
                <a class="nav-link active" aria-current="page" href="/">Add user</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/form-users/web/users">List of users</a>
            </li>
        </ul>
    </header>

    <div class="container">
        <div class=" text-center mt-5 ">

            <h1 >Add new user</h1>


        </div>


        <div class="row ">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">

                        <div class = "container">
                            <form id="contact-form"
                                  role="form"
                                  class="needs-validation"
                                  method="post"
                                  action="http://localhost/form-users/web/index/addNewUser"
                                  onsubmit="submitForm(e)"
                                  novalidate>

                                <div class="controls">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form_name">Your first and last name *</label>
                                                <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your first and last name *"  required>
                                                <div class="valid-feedback">
                                                    Great!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please add your first and last name.
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form_email">Email *</label>
                                                <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                                                <div class="valid-feedback">
                                                    Great!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please write a valid email!
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form_gender">Gender *</label>
                                                <select id="form_gender" name="gender" class="form-control" required>
                                                    <option value="" selected disabled>--Select Your Gender--</option>
                                                    <option >Male</option>
                                                    <option >Female</option>
                                                </select>
                                                <div class="valid-feedback">
                                                    Great!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please choose your gender.
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form_status">Status *</label>
                                                <select id="form_status" name="status" class="form-control" required>
                                                    <option value="" selected disabled>--Select Your Status--</option>
                                                    <option >Active</option>
                                                    <option >Inactive</option>
                                                </select>
                                                <div class="valid-feedback">
                                                    Great!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please select your status.
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-12">

                                            <input type="submit" class="btn btn-dark btn-send  pt-2 btn-block" value="Add User" >

                                        </div>

                                    </div>


                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <footer></footer>

    <script src="js/script.js"></script>
    <script src="js/users.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>

