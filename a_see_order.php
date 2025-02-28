<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&family=Satisfy&display=swap" rel="stylesheet"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <style>
        body{
            background: linear-gradient(cornflowerblue,blue);
            background-repeat:no-repeat;
            background-size: cover;
        }

        h1{
            font-size: 50px;
            font-family: 'Caveat',cursive;
            text-align: center;
        }

        .order_list{
            height: 650px;
            width: 80%;
            background-color: white;
            margin-left: auto;
            margin-right: auto;
            overflow-y: auto;
            overflow-x:hidden;
        }

        table{
            border-collapse: collapse;
            font-family: arial;
            margin: 25px 0;
            font-size: 0.9em;
            min-width: 1216px;
            text-align: center;
        }

        table thead{
            background-color: cornflowerblue;
            color: black;
            font-weight: bold;
        }

        table td{
            padding: 12px 15px;
        }

        table tr{
            border-bottom: 1px solid gray;
        }

        table tr:nth-of-type(even){
            background-color: #f3f3f3;
        }

        table tr:last-of-type{
            border-bottom: 2px solid cornflowerblue;
        }

    </style>
</head>
<body>
    <h1>Orders for Today...</h1>
    <div class="order_list">
    <?php
            $db_host='127.0.0.1';
            $db_user='root';
            $db_pass='';
            $db_name='restaurant';

            $conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
            if(!$conn)
            {
                die('Failed to connect mysql database'.mysqli_connect_error());
            }

            $sql='SELECT * from customer_order';
            $query = mysqli_query($conn,$sql);

            if(!$query)
            {
                die('error found'.mysqli_error($conn));
            }

            echo "
            <table class='table'>
            <thead>
            <tr>
            <th>Customer_ID</th>
            <th>Product_ID</th>
            <th>Total Price(₹)</th>
            <th>Address</th>
            <th>Order Date/Time</th>
            </tr>
            </thead>";

            while($row=mysqli_fetch_array($query))
            {
                echo "<tr>
                <td>".$row['customer_id']."</td>
                <td>".$row['product_id']."</td>
                <td>".$row['total_price']."</td>
                <td>".$row['house_no'].",".$row['street_name'].",".$row['area_name']."</td>
                <td>".$row['created_at']."</td>
                </tr>";
            }

            echo "</table>";
        ?>
    </div>
</body>
</html>
