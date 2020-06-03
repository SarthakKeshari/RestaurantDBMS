<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choice</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            background-color: black;
            
        }

        img{
            opacity: 0.8;
        }

        #logo{
            top: 1000px;
            margin-left: 620px;
            height: 200px;
            width: 350px;
        }

        #top{
            margin-top: -600px;
            margin-left: 600px;
            font-size: 50px;
            color: white;
            filter: contrast(80%);
        }

        #right{
            margin-top: 240px;
            margin-left: 1100px;
            font-size: 50px;
            color: white;
            filter: contrast(80%);
        }

        #left{
            margin-top: -120px;
            margin-left: 200px;
            font-size: 50px;
            color: white;
            filter: contrast(80%);
        }

    </style>
</head>
<body>
    
    <img src="a_choice_page_background.jpg" alt="Choices" usemap="#choices" hidefocus="true" id="choose">
 
    <map name="choices">
        <area shape="poly" coords="29,0,786,443,1527,0" href="a_see_order.php" alt="See_Order" >
        <area shape="poly" coords="1558,0,793,452,1015,748,1558,748" href="a_menu_list.php" alt="Menu_List" >
        <area shape="poly" coords="7,0,775,451,555,748,0,748" href="a_employee_details.php" alt="Employee details" >
    </map>

    <p id="top">Orders for Today</p>
    <p id="right">Menu List</p>
    <p id="left">Employee Details</p>
    
</body>
</html>
