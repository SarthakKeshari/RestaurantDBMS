<?php
    //To get value from form in a_login_page.php
    $Emp_id=$_POST['Emp_id'];
    $Emp_Pin=$_POST['Emp_Pin'];
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "restaurant";

    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    //to prevent mysql injection
    //For prevention against data stealing
    $Emp_id=stripcslashes($Emp_id);
    $Emp_Pin=stripcslashes($Emp_Pin);
    $Emp_id=mysqli_real_escape_string($conn,$Emp_id);
    $Emp_Pin=mysqli_real_escape_string($conn,$Emp_Pin);

    //connect to the server and select database
    mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"submit");

    //Query the database for user
    $result = mysqli_query($conn,"select * from employee where 
                    Emp_id ='$Emp_id' and Emp_Pin='$Emp_Pin'")
                    or die("Failed to query database ".mysqli_error($conn));
    $row = mysqli_fetch_array($result);

    if($row['Emp_id'] == $Emp_id && $row['Emp_Pin'] == $Emp_Pin)
    {
        header("Location: e_order_page.php"); 
        exit;
    }
    else
    {
        echo "<script>alert('Incorrect Emp_id or Emp_Pin');
        window.location.href = 'e_login_page.php';
        </script>";
    }
?>