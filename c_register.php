<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
    $Username = $_POST['Username'];
    $Email = $_POST['Email'];
    $Mobile = $_POST['Mobile'];
    $Password = $_POST['Password'];

    if (!empty($Username) && !empty($Email) && !empty($Mobile) && !empty($Password)) {
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "restaurant";
        //create connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else
    {
        $query = "INSERT Into customer (Username, Email, Mobile, Password) values('$Username','$Email','$Mobile','$Password')";
    $res=mysqli_query($conn,$query);
    if($res)
    {
        header("Location: menu_page.php");
    }
    else
    {
        echo "lol";
        echo mysqli_error($conn);
    }
    }
} else {
echo "All field are required";
die();
}
}
?>