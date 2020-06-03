<html>
    <head>
        <title>Restuarant Management</title>
        <link rel="stylesheet" href="c_your_detail.css" type=text/css>
    </head>
    <body>
        <img src="delivery.png" width="95%" height="95%">
        <form class="formbox" id="submit">
            <p>Customer Id : </p>
            <p>--------</p>
            <input type="text" class="input" placeholder="Enter House number" required>
            <input type="text" class="input" placeholder="Enter Street name" required>
            <input type="text" class="input" placeholder="Enter Area name" required>
        </form>
        <div class="out_of_form1">
            <p>Customer Name :</p>
        </div>
        <div class="out_of_form2">
            <p>Customer Phone No. :</p>
        </div>
        <button id="submit" class="pay" onclick="window.location.href='c_receipt_page.php'">Pay Now</button>

    </body>
</html>