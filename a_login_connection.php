<?php
    //To get value from form in a_login_page.php
    $Admin_id=$_POST['Admin_id'];
    $PIN=$_POST['PIN'];
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "restaurant";

    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    //to prevent mysql injection
    //For prevention against data stealing
    $Admin_id=stripcslashes($Admin_id);
    $PIN=stripcslashes($PIN);
    $Admin_id=mysqli_real_escape_string($conn,$Admin_id);
    $PIN=mysqli_real_escape_string($conn,$PIN);

    //connect to the server and select database
    mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"submit");

    //Query the database for user
    $result = mysqli_query($conn,"select * from administrator where 
                    admin_id ='$Admin_id' and PIN='$PIN'")
                    or die("Failed to query database ".mysqli_error($conn));
    $row = mysqli_fetch_array($result);

    if($row['admin_id'] == $Admin_id && $row['PIN'] == $PIN)
    {
        header("Location: a_choice_page.php"); 
        exit;
    }
    else
    {
        echo "<script>alert('Incorrect Admin_id or PIN');
        window.location.href = 'a_login_page.php';
        </script>";
    }
?>