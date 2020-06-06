<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Out</title>
    <style>
        body{
            background-color: black;
            justify-content: center;
            text-align: center;
            top: auto;
            bottom: auto;
        }

        p{
            font-size: 20px;
            font-weight: 500px;
            color: white;
        }
    </style>
</head>
<body>
    <?php session_start();
    $conn = mysqli_connect("localhost", "root", "", "restaurant");
    // Check connection
    if ($conn->connect_error)
    {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql_user = "SELECT * FROM customer WHERE id =".$_SESSION['user_id'];
    $result_user=mysqli_query($conn,$sql_user);
    while($row_user = mysqli_fetch_array($result_user)) { ?>
    <p>Hey!!! <?php echo $row_user['Username'] ;?><br>
        Thank You for visiting.<br>

        You have been logged out successfully.</p>
    <?php } 
    sleep(4);
    // Removing session data
    
    if(isset($_SESSION["user_id"])){
        unset($_SESSION["user_id"]);
    }
    session_destroy();
    ?>
    
    <script>
         setTimeout(function(){
            window.location.href = 'c_login_register_page.php';
         }, 4000);
    </script>

</body>
</html>
