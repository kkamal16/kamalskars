<html>

<head>
        <title> User login and registration </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css"
        href=https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css>
</head>

<body class="body">

<div class="container">
    <div class="login-box">
    <div class="row">
    <div class="col-md-6 login-left">
        <h2> Login Here </h2>
        <form action="validation.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="user" class="form-control" required>
            </div>
            <div class="form-group">
                <label>password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
                <button type="submit" class="btn btn-primary"> Login </button>

        </form>
    </div>

    <div class="col-md-6 login-right">
        <h2> Registration </h2>
        <form action="registration.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="user" class="form-control" required>
            </div>
            <div class="form-group">
                <label>password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
                <button type="submit" class="btn btn-primary"> Register </button>

        </form>
    </div>
    </div>



    </div>
</div>


</html>