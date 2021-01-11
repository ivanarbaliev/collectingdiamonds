


<!DOCTYPE html>
    <head>
        <title> Login/Register form </title>
        <link rel="stylesheet" type = "text/css" href="styleforlogin.css">
        <link rel="stylesheet" href="login.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <body>
    <h1>Collecting Diamonds</h1>
        <div class="container">
            <div class = "login-box">

            <div class="row">
                <div class="col-md-6 login-left">
                <h2> Login Here </h2>
                <form action="login.php" method= "post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary"> Login </button>
                </form>
            </div>

             <div class="col-md-6 login-right">
                <h2> Register Here </h2>
                <form action="registration.php" method= "post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary"> Register </button>
                </form>
            </div>
            </div>
        </div>

        </div>
        
</body>
    </body>
</html>