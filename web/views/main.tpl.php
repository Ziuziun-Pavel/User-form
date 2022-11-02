<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php if (!empty($pageData)) {
            echo $pageData['title'];
        } ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/form-users/web/css/bootstrap.min.css">
    <link rel="stylesheet" href="/form-users/web/css/bootstrap.css">
    <link rel="stylesheet" href="/form-users/web/css/font-awesome.min.css">
    <link rel="stylesheet" href="/form-users/web/css/style.css">

</head>
<body>

    <header class="center">
        <ul class="nav nav-tabs navmenu">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="http://localhost/form-users/web/">Add user</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/form-users/web/users">List of users</a>
            </li>
        </ul>
    </header>

    <div class="container">
        <div class=" text-center mt-5 ">

            <h1 ><?php if (!empty($pageData)) {
                    echo $pageData['form-title'];
                } ?></h1>


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
                                                <?php if (!empty($pageData['user'])) {
                                                    foreach ($pageData['user'] as $key => $value) {
                                                        if($key == 'fullName' ) {
                                                            echo "<input id='form_name' type='text' name='name' class='form-control' placeholder='Please enter your first and last name *' value='$value'  required>";
                                                        }
                                                }
                                                } else {
                                                    echo "<input id='form_name' type='text' name='name' class='form-control' placeholder='Please enter your first and last name *'  required>";

                                                }
                                                ?>
                                                <div class='valid-feedback'>
                                                    Great!
                                                    </div>
                                                <div class='invalid-feedback'>Please add your first and last name.</div>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form_email">Email *</label>
                                                <?php if (!empty($pageData['user'])) {
                                                    foreach ($pageData['user'] as $key => $value) {
                                                        if($key == 'email' ) {
                                                            echo "<input id='form_email' type='email' name='email' class='form-control' placeholder='Please enter your email *' value='$value' pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$' required>";
                                                        }
                                                    }
                                                } else {
                                                    echo "<input id='form_email' type='email' name='email' class='form-control' placeholder='Please enter your email *' pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$' required>";

                                                }
                                                ?>
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
                                                <?php if (!empty($pageData['user'])) {
                                                    foreach ($pageData['user'] as $key => $value) {
                                                        if($key == 'gender') {
                                                            echo "<select id='form_gender' name='gender' class='form-control' required>";
                                                            echo "<option value='' disabled>--Select Your Gender--</option>";
                                                            if ($value == 'Male') {
                                                                echo "<option selected> Male</option>";
                                                            } else {
                                                                echo "<option> Male</option>";
                                                            }
                                                            if($value == 'Female' ) {
                                                                echo "<option selected> Female</option>";
                                                            } else {
                                                                echo "<option> Female</option>";
                                                            }
                                                            echo "</select>";
                                                        }
                                                    }
                                                } else {
                                                    echo "<select id='form_gender' name='gender' class='form-control' required>";
                                                    echo "<option value='' selected disabled>--Select Your Gender--</option>";
                                                    echo "<option >Male</option>";
                                                    echo "<option >Female</option>";
                                                    echo "</select>";
                                                }
                                                ?>
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
                                                <?php if (!empty($pageData['user'])) {
                                                    foreach ($pageData['user'] as $key => $value) {
                                                        if($key == 'status') {
                                                            echo "<select id='form_status' name='status' class='form-control' required>";
                                                            echo "<option value='' disabled>--Select Your Status--</option>";
                                                            if ($value == 'Active') {
                                                                echo "<option selected> Active</option>";
                                                            } else {
                                                                echo "<option> Active</option>";
                                                            }
                                                            if($value == 'Inactive' ) {
                                                                echo "<option selected> Inactive</option>";
                                                            } else {
                                                                echo "<option> Inactive</option>";
                                                            }
                                                            echo "</select>";
                                                        }
                                                    }
                                                } else {
                                                    echo "<select id='form_status' name='status' class='form-control' required>";
                                                    echo "<option value='' selected disabled>--Select Your Gender--</option>";
                                                    echo "<option >Active</option>";
                                                    echo "<option >Inactive</option>";
                                                    echo "</select>";
                                                }
                                                ?>
                                                <div class="valid-feedback">
                                                    Great!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please select your status.
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-12">

                                            <input type="submit" class="btn btn-dark btn-send  pt-2 btn-block" value="<?php if (!empty($pageData)) {
                                                echo $pageData['btn-title'];
                                            } ?>" >

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

    <footer>
    </footer>

    <script src="js/script.js"></script>
    <script src="js/users.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>

