<?php
    //Get values passed from form in login.php file
    $Username=$_POST['Username'];
    $Password=$_POST['Password'];
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "restaurant";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    //to prevent mysql injection
    //For prevention against data stealing
    $Username=stripcslashes($Username);
    $Password=stripcslashes($Password);
    $Username=mysqli_real_escape_string($conn,$Username);
    $Password=mysqli_real_escape_string($conn,$Password);

    //connect to the server and select database
    mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"submit");

    //Query the database for user
    $result = mysqli_query($conn,"select * from customer where 
                    Username ='$Username' and Password='$Password'")
                    or die("Failed to query database ".mysqli_error($conn));
    $row = mysqli_fetch_array($result);
    if($row['Username'] == $Username && $row['Password'] == $Password)
    {
        session_start();
        $_SESSION["user_id"] = $row['id'];
        header("Location: menu_page.php"); 
        exit;
    }
    else
    {
        echo "<script>alert('Incorrect Username or Password');
        window.location.href = 'c_login_register_page.php';
        </script>";
    }
?>