<html>
    <head>
        <title>Restaurant Management</title>
        <link rel=stylesheet href="a_login.css">
    </head>
    <body>
        
        <img class=image src="logo_struct.png" style = " margin-left: -10%;" height=15% width=12%>
        <div style="width: 10%; float: left">
        <h1 style = " margin-left: 40%; margin-top: 200%">Welcome</h1> 
        <h1 class="a" style = " margin-left: 60%; margin-top: -10%">Admin</h1>
        </div>
        <div style="width: 90%; float:right">
        <form action="a_login_connection.php" method="post">
            <input name="Admin_id" class=admin type="txt" placeholder="Admin Id" size=10 style="color: grey; " required>
            <input name="PIN" class=admin type="password" placeholder="PIN" size=10 style="color: grey" required>
            <input name="OTP" class=admin type="otp" placeholder="OTP" size=5 style="color: grey" required>
            <div class=admins>
            <input id=submit type="submit" value="Log In">
            </div>
        </form>
        </div>
    </body>
</html>