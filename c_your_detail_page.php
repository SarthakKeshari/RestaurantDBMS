<html>
    <head>
        <title>Restuarant Management</title>
        <link rel="stylesheet" href="c_your_detail.css" type=text/css>
    </head>
    <body>

        <?php
            $conn = mysqli_connect("localhost", "root", "", "restaurant");
            // Check connection
            if ($conn->connect_error)
            {
            die("Connection failed: " . $conn->connect_error);
            }
            session_start();
            $sql = "SELECT * FROM customer WHERE id =". $_SESSION['user_id'];
            $result=mysqli_query($conn,$sql);
            ?>
        <img src="delivery.png" width="95%" height="95%">
        <form class="formbox" id="submit">
            <p>Customer Id : </p>
            <p>--------</p>
            <?php  while($row = mysqli_fetch_array($result)) { ?>
            <input type="text" class="input" placeholder="Enter House number" required>
            <input type="text" class="input" placeholder="Enter Street name" required>
            <input type="text" class="input" placeholder="Enter Area name" required>
           
        </form>
       
            
        <div class="out_of_form1">
            <p>Customer Name :  <?php echo  $row['Mobile'] ;?> </p>
        </div>
        <div class="out_of_form2">
            <p>Customer Phone No. : <?php echo $row['Username'];?> </p>
        </div>
        <?php } ?>
        <button id="submit" class="pay" onclick="window.location.href='c_receipt_page.php'">Pay Now</button>

    </body>
</html>