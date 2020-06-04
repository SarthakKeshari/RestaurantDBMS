<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
    $product_id = $_POST['product_id'];
    $user_id = $_POST['user_id'];
   

    if (!empty($product_id) && !empty($user_id)) {
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

            $sum =0 ;
            for($i=0 ; $i<count($product_id);$i++){

               $query1 = "SELECT * FROM menu WHERE item_id = ".$product_id[$i];
               $result=mysqli_query($conn,$query1);
                while($row = mysqli_fetch_array($result)) {
                    $sum  = $sum +  $row['item_price'];
                }
            }
            $product_string = implode(",",$product_id);
            session_start();
            $sess = $_SESSION['user_id'];
            $query = "INSERT Into customer_order (customer_id, product_id, total_price) values('$sess','$product_string','$sum')";
            $res=mysqli_query($conn,$query);
            if($res)
            {

                // $arr=  array(
                //     'message' => "Order Accepted Succuessfully!",
                //     'status'=> 200,
                // );
               //  header("Location: c_your_detail_page.php");
               // return json_encode($arr);
            
              
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