<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NIE | Admin Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="login_style.css" />
</head>

<body>

    <body>
        <div class="header text-primary">
            <img class="header__logo" src="img/NIE_University_logo.svg.png" />
            <h1 class="header">NIE HOSTEL</h1>
        </div>

        <div id="login">
            <h3 class="text-center pt-5">Admin Login</h3>
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <form name="f1" id="login-form" onsubmit="return validation()" class="form"
                                action="admin_authentication.php" method="POST">
                                <h3 class="text-center text-info">Login</h3>
                                <div class="form-group">
                                    <label for="admin_username" class="text-info">Admin Username:</label><br />
                                    <input type="text" name="admin_username" id="admin_username" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="admin_password" class="text-info">Admin Password:</label><br />
                                    <input type="text" name="admin_password" id="admin_password" class="form-control" />
                                </div>
                                <div class="form-group row" >
                                    <input type="submit" name="submit" class="btn btn-success btn-md col-3 mx-3" value="Login" />
                                    <a class="btn btn-success btn-md col-3 mx-3" href="student_login.php" role="button">Login as student</a>
                                    <a class="btn btn-success btn-md col-3 mx-3" href="parents_login.php" role="button">Login as parent</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</body>

<script>
    function validation() {
        var id = document.f1.user.value;
        var ps = document.f1.pass.value;
        if (id.length == "" && ps.length == "") {
            alert("User Name and Password fields are empty");
            return false;
        }
        else {
            if (id.length == "") {
                alert("User Name is empty");
                return false;
            }
            if (ps.length == "") {
                alert("Password field is empty");
                return false;
            }
        }
    }  
</script>

</html>