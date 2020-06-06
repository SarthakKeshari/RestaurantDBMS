<?php
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
    $house_number = $_POST['house_number'];
    $street_name = $_POST['street_name'];
    $area_name = $_POST['area_name'];

    if (!empty($house_number) && !empty($street_name) && !empty($area_name)) {
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
        $query = "UPDATE customer_order SET house_no='$house_number',street_name='$street_name',area_name='$area_name' WHERE customer_id=".$_SESSION['user_id'];
    $res=mysqli_query($conn,$query);
    if($res)
    {
        header("Location: c_receipt_page.php");
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