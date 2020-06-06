<html>
    <head>
        <title>Restuarant Manegement</title>
        <link rel="stylesheet" type="text/css" href="e_login.css">
    </head>
    <body>
        <div class="logo_head">
            <img src="logo.png" alt="">
        </div>
        <div class="loginbox">
            <a href="a_login_page.php"><img src="img/avatar.jpg" class="avatar"></a>
                <h1>Employee Login</h1>
                <form action="e_login.php" method="POST">
                    <p>Employee ID</p>
                    <input type="text" name="Emp_id" placeholder="Enter Employee ID" required>
                    <p>PIN</p>
                    <input type="password" name="Emp_Pin" placeholder="Enter PIN" required>
                    <input type="submit" value="Login">
                    <a href="#">Forgot Password?</a>
                    <br/>

                </form>
        </div>
        <div class="footer">
        </div>
    </body>
</html>