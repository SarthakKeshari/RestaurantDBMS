<html>
    <head>
        <title>Restuarant Management</title>
        <link rel="stylesheet" href="c_login_register.css">
    </head>
    <body>
        
        <div class=splash>
            <img class="fade-in" src="logo_struct.png" alt="logo">
        </div>

        <script>
            const splash=document.querySelector(".splash")
 
            document.addEventListener("DOMContentLoaded",(e)=>{
                setTimeout(()=>{
                    splash.classList.add('display-none');
                },2000);
            })
        </script>
        


        <div class="emp_log"><a href="e_login_page.php" >Employee Login</a></div>
            <div class = "cap">
                <img src="img/cap copy.png" height="320" width="750">
            <div class="form_box">
                <div class="button_box">
                    <div id="btn"></div>
                    <button type="button" class="toggle_btn" onclick="login()">Login</button>
                    <button id="reg" type="button" class="toggle_btn" onclick="register()">Registration</button>
                </div>
                <div class="social_icons">
                    <a href="https://www.facebook.com"><img src="img/facebook.png"></a>
                    <a href="https://www.instagram.com"><img src="img/instagram.png"></a>
                    <a href="https://www.whatsapp.com"><img src="img/whatsapp.png"></a>
                </div>
                <form id="login" class="input_group" action="c_login.php" method="post">
                    <input type="text" class="input_field" name="Username" placeholder="Enter Username" required>
                    <input type="password" class="input_field" name="Password" placeholder="Enter Password" required>
                    <input type="submit" class="submit_btn" value="Login">
                    <a href="#">Don't have an account? Sign up</a>
                </form>
                <form id="register" class="input_group" action="c_register.php" method="post">
                    <input type="text" class="input_field" name="Username" placeholder="Enter Username" required>
                    <input type="email" class="input_field" name="Email" placeholder="Enter Email Id" required>
                    <input type="text" class="input_field" name="Mobile" placeholder="Enter Mobile no." required>
                    <input type="password" class="input_field" name="Password" placeholder="Enter Password" required>
                    <input type="checkbox" class="check_box"><span>I agree to the terms & conditions</span>
                    <input type="submit" class="submit_btn" value="Register">
                </form>
            </div>    
        </div>
    
        <script>
            var x=document.getElementById("login");
            var y=document.getElementById("register");
            var z=document.getElementById("btn");

            function register(){
                x.style.left = "-400px";
                y.style.left = "70px";
                z.style.left = "130px";
            }
            
            function login(){
                x.style.left = "60px";
                y.style.left = "450px";
                z.style.left = "0px";
            }
        </script> 
    </body>
</html>