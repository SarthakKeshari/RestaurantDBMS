<html>
    <head>
        <title>Restaurant Management</title>
        <link rel="stylesheet" href="c_receipt.css" type="text/css">
    </head>
    <body>
    <div class="footer">
            <input type="submit" class="submit" value="Print receipt" onclick="msg()">
        </div>
        <div class="main">
        <div class="print">    
            <p id="receipt">Receipt</p>
            <p>Customer Id : </p>
            <p>Customer Name : </p>
            <p>Mobile No. :</p>
            <p>Address :</p>
            <p id="amount">Amount :</p>
            <p id="thank">Thank You! Visit again!</p>
        </div>
        </div>
        

        <script>
            function msg(){
                print("Payment received");
            }
        </script>
    </body>
</html>