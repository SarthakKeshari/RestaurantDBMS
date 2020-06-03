<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&family=Satisfy&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="menu.css" type=text/css>
    </head>
    <body>
        <div class="navbar">
            <img src="logo_struct.png" alt="LOGO" class="logo">
            <span class="nav">
                <input type="checkbox" name="">
                <span></span>
                <span></span>
                <ul class="menunav">
                    <li> <a href="#Home">Menu</a> </li>
                    <li> <a href="#">About Us</a> </li>
                    <li> <a href="#">Contact Us</a> </li>
                </ul>
            </span>
        </div>
        <div class="blue_stretch">
        
        </div>
        <a name="Home"></a>
        <div class="heading"><h2>You will be served with the best delicacy</h2></div>
        <div class="menu_head">
            <div class="menu_row_1">
                <a href="#Soups"><img src="menu/soups.jpg" alt="" class="row1" id="c1"></a>
                <a href="#Snacks"><img src="menu/snacks.jpg" alt="" class="row1" id="c2"></a>
                <a href="#Starters_Veg"><img src="menu/Starters_Veg.jpg" alt="" class="row1" id="c2"></a>
                <a href="#Starters_Non_Veg"><img src="menu/Starters_non_veg.jpg" alt="" class="row1" id="c1"></a>
            </div>
            <div class="menu_heading">
                <p class="Menu">MENU</p>
            </div>
            <div class="menu_row_2">
                <a href="#Desserts"><img src="menu/Desserts.jpg" alt="" class="row2" id="c3"></a>
                <a href="#Breads"><img src="menu/Breads.jpg" alt="" class="row2" id="c4"></a>
                <a href="#Main_Course_Veg"><img src="menu/Main_course Veg.jpg" alt="" class="row2" id="c4"></a>        
                <a href="#Main_Course_Non_Veg"><img src="menu/Main_course Non_Veg.jpg" alt="" class="row2" id="c3"></a>
            </div>
        </div>

        <div class="menu_list">
        <?php
            $conn = mysqli_connect("localhost", "root", "", "company");
            // Check connection
            if ($conn->connect_error)
            {
            die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT id, username, password FROM login";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) 
            {
            // output data of each row
            while($row = $result->fetch_assoc()) 
            { ?>

            
            <?php
            }
            echo "hello";
            }
            else { echo "0 results"; }
            $conn->close();
          ?>
          
      
            <a name="Soups"></a>
            <p id="phead"> Soups <hr></p>
            <div class=items>
                <ul>
                    <li><input type="checkbox" id="cbsoup1"  value="111" />
                      <label for="cbsoup1"><img src="menu/Soup/tomato soup.png"  ><div id="food_name">Tomato Soup</div><div id="food_cost">Rs 45</div></label>
                    </li>
                    <li><input type="checkbox" id="cbsoup2" value="112"/>
                      <label for="cbsoup2"><img src="menu/Soup/Veg. Sweet corn soup.jpg"><div id="food_name">Veg. Sweet Corn Soup</div><div id="food_cost">Rs 55</div></label>
                    </li>
                    <li><input type="checkbox" id="cbsoup3" value="113"/>
                      <label for="cbsoup3"><img src="menu/Soup/Vegetable_Manchow_Soup.jpg"><div id="food_name">Veg. Manchow Soup</div><div id="food_cost">Rs 79</div></label>
                    </li>
                    <li><input type="checkbox" id="cbsoup4" value="114"/>
                      <label for="cbsoup4"><img src="menu/Soup/Chicken sweet corn soup.jpeg"  ><div id="food_name">Chicken Sweet Corn Soup</div><div id="food_cost">Rs 109</div></label>
                    </li>
                    <li><input type="checkbox" id="cbsoup5" value="115"/>
                        <label for="cbsoup5"><img src="menu/Soup/Chicken manchow soup.jpg"  ><div id="food_name">Chicken Manchow Soup</div><div id="food_cost">Rs 129</div></label>
                    </li>
                  </ul>
            </div>

            <a name="Snacks"></a>
            <p id="phead"> Snacks <hr></p>
            <div class=items>
                <ul>
                    <li><input type="checkbox" id="cbsnacks1" />
                      <label for="cbsnacks1"><img src="menu/Snacks/peanut masala.png"  ><div id="food_name">Peanut Masala</div><div id="food_cost">Rs 79</div></label>
                    </li>
                    <li><input type="checkbox" id="cbsnacks2" />
                      <label for="cbsnacks2"><img src="menu/Snacks/onion pakoda.jpg"  ><div id="food_name">Onion Pakoda</div><div id="food_cost">Rs 85</div></label>
                    </li>
                    <li><input type="checkbox" id="cbsnacks3" />
                      <label for="cbsnacks3"><img src="menu/Snacks/Paneer Pakoras.jpg"  ><div id="food_name">Paneer Pakora</div><div id="food_cost">Rs 99</div></label>
                    </li>
                    <li><input type="checkbox" id="cbsnacks4" />
                      <label for="cbsnacks4"><img src="menu/Snacks/Chicken pakoda.jpg"  ><div id="food_name">Chicken Pakoda</div><div id="food_cost">Rs 170</div></label>
                    </li>
                    <li><input type="checkbox" id="cbsnacks5" />
                        <label for="cbsnacks5"><img src="menu/Snacks/prawn pakoda.jpg"  ><div id="food_name">Prawn Pakoda</div><div id="food_cost">Rs 229</div></label>
                    </li>
                    <li><input type="checkbox" id="cbsnacks6" />
                    <label for="cbsnacks6"><img src="menu/Snacks/Vegetable Pakoras.jpg"  ><div id="food_name">Vegetable Pakoda</div><div id="food_cost">Rs 135</div></label>
                    </li>
                    <li><input type="checkbox" id="cbsnacks7" />
                    <label for="cbsnacks7"><img src="menu/Snacks/Chicken Cheese Balls.jpeg"  ><div id="food_name">Chicken Cheese Balls</div><div id="food_cost">Rs 299</div></label>
                    </li>
                    <li><input type="checkbox" id="cbsnacks8" />
                    <label for="cbsnacks8"><img src="menu/Snacks/Palak Pakoda.jpg"  ><div id="food_name">Palak Pakoda</div><div id="food_cost">Rs 129</div></label>
                    </li>
                    <li><input type="checkbox" id="cbsnacks9" />
                    <label for="cbsnacks9"><img src="menu/Snacks/Cashew Chicken Balls.jpg"  ><div id="food_name">Cashew Chicken Balls</div><div id="food_cost">Rs 399</div></label>
                    </li>
                    <li><input type="checkbox" id="cbsnacks10" />
                    <label for="cbsnacks10"><img src="menu/Snacks/Mutton Keema Balls.jpg"  ><div id="food_name">Mutton Keema Balls</div><div id="food_cost">Rs 340</div></label>
                    </li>
                  </ul>
            </div>

            <a name="Starters_Veg"></a>
            <p id="phead"> Starters Veg. <hr></p>
            <div class=items>
                <ul>
                    <li><input type="checkbox" id="cbVegStarters1" />
                      <label for="cbVegStarters1"><img src="menu/Starters Veg/Paneer 65.jpg"  ><div id="food_name">Paneer 65</div><div id="food_cost">Rs 199</div></label>
                    </li>
                    <li><input type="checkbox" id="cbVegStarters2" />
                    <label for="cbVegStarters2"><img src="menu/Starters Veg/Andhra Chilli Paneer.jpg"  ><div id="food_name">Andhra Chilli Paneer</div><div id="food_cost">Rs 180</div></label>
                    </li>
                    <li><input type="checkbox" id="cbVegStarters3" />
                    <label for="cbVegStarters3"><img src="menu/Starters Veg/Paneer Manchurian.jpg"  ><div id="food_name">Paneer Manchurian</div><div id="food_cost">Rs 219</div></label>
                    </li>
                    <li><input type="checkbox" id="cbVegStarters4" />
                    <label for="cbVegStarters4"><img src="menu/Starters Veg/Lemon Paneer.jpg"  ><div id="food_name">Lemon Paneer</div><div id="food_cost">Rs 199</div></label>
                    </li>
                    <li><input type="checkbox" id="cbVegStarters5" />
                    <label for="cbVegStarters5"><img src="menu/Starters Veg/Mushroom Kaju Masala.jpg"  ><div id="food_name">Mushroom Kaju Masala</div><div id="food_cost">Rs 230</div></label>
                    </li>
                    <li><input type="checkbox" id="cbVegStarters6" />
                    <label for="cbVegStarters6"><img src="menu/Starters Veg/Baby Corn Manchurian.jpg"  ><div id="food_name">Baby Corn Manchurian</div><div id="food_cost">Rs 159</div></label>
                    </li>
                    <li><input type="checkbox" id="cbVegStarters7" />
                    <label for="cbVegStarters7"><img src="menu/Starters Veg/Baby Corn 65.jpg"  ><div id="food_name">Baby Corn 65</div><div id="food_cost">Rs 189</div></label>
                    </li> 
                    <li><input type="checkbox" id="cbVegStarters8" />
                    <label for="cbVegStarters8"><img src="menu/Starters Veg/chilli mushroom.jpg"  ><div id="food_name">Chilli Mushroom</div><div id="food_cost">Rs 259</div></label>
                    </li>
                    <li><input type="checkbox" id="cbVegStarters9" />
                    <label for="cbVegStarters9"><img src="menu/Starters Veg/Veg Manchurian.jpg"  ><div id="food_name">Veg. Manchurian/div><div id="food_cost">Rs 199</div></label>
                    </li>
                    <li><input type="checkbox" id="cbVegStarters10" />
                    <label for="cbVegStarters10"><img src="menu/Starters Veg/Paneer Tikka.jpg"  ><div id="food_name">Paneer Tikka</div><div id="food_cost">Rs 155</div></label>
                    </li>
                  </ul>
            </div>

            <a name="Starters_Non_Veg"></a>
            <p id="phead"> Starters Non Veg. <hr></p>
            <div class=items>
                <ul>
                    <li><input type="checkbox" id="cbNonVegStarters1" />
                    <label for="cbNonVegStarters1"><img src="menu/Starters Non Veg/Chicken Patiala.jpg"  ><div id="food_name">Chicken Patiala</div><div id="food_cost">Rs 329</div></label>
                    </li>
                    <li><input type="checkbox" id="cbNonVegStarters2" />
                    <label for="cbNonVegStarters2"><img src="menu/Starters Non Veg/Chicken 65.jpg"  ><div id="food_name">Chicken 65</div><div id="food_cost">Rs 259</div></label>
                    </li>
                    <li><input type="checkbox" id="cbNonVegStarters3" />
                    <label for="cbNonVegStarters3"><img src="menu/Starters Non Veg/Ginger Chicken.jpg"  ><div id="food_name">Ginger Chicken</div><div id="food_cost">Rs 229</div></label>
                    </li>
                    <li><input type="checkbox" id="cbNonVegStarters4" />
                    <label for="cbNonVegStarters4"><img src="menu/Starters Non Veg/Menthi Chicken.jpg"  ><div id="food_name">Menthi Chicken</div><div id="food_cost">Rs 235</div></label>
                    </li>
                    <li><input type="checkbox" id="cbNonVegStarters5" />
                    <label for="cbNonVegStarters5"><img src="menu/Starters Non Veg/Royal Chicken Pakoda.jpg"  ><div id="food_name">Royal Chicken Pakoda</div><div id="food_cost">Rs 249</div></label>
                    </li>
                    <li><input type="checkbox" id="cbNonVegStarters6" />
                    <label for="cbNonVegStarters6"><img src="menu/Starters Non Veg/Dragon Chicken.jpg"  ><div id="food_name">Dragon Chicken</div><div id="food_cost">Rs 339</div></label>
                    </li>
                    <li><input type="checkbox" id="cbNonVegStarters7" />
                    <label for="cbNonVegStarters7"><img src="menu/Starters Non Veg/Schezwan Chicken.jpg"  ><div id="food_name">Schezwan Chicken</div><div id="food_cost">Rs 289</div></label>
                    </li>        
                  </ul>
            </div>

            <a name="Main_Course_Veg"></a>
            <p id="phead"> Main Course Veg. <hr></p>
            <div class=items>
                <ul>
                    <li><input type="checkbox" id="cbMCVeg1" />
                      <label for="cbMCVeg1"><img src="menu/Main Course Veg/Dal Fry.jpg"  ><div id="food_name">Dal Fry</div><div id="food_cost">Rs 45</div></label>
                    </li>
                    <li><input type="checkbox" id="cbMCVeg2" />
                    <label for="cbMCVeg2"><img src="menu/Main Course Veg/Dal Palak.jpg"  ><div id="food_name">Palak Dal</div><div id="food_cost">Rs 55</div></label>
                    </li>
                    <li><input type="checkbox" id="cbMCVeg3" />
                    <label for="cbMCVeg3"><img src="menu/Main Course Veg/Gongura Dal.JPG"  ><div id="food_name">Gongura Dal</div><div id="food_cost">Rs 55</div></label>
                    </li>
                    <li><input type="checkbox" id="cbMCVeg4" />
                    <label for="cbMCVeg4"><img src="menu/Main Course Veg/Mughlai Mushroom Curry.jpg"  ><div id="food_name">Mughlai Mushroom Curry</div><div id="food_cost">Rs 160</div></label>
                    </li>
                    <li><input type="checkbox" id="cbMCVeg5" />
                    <label for="cbMCVeg5"><img src="menu/Main Course Veg/Kadai Paneer.jpg"  ><div id="food_name">Kadai Paneer</div><div id="food_cost">Rs 235</div></label>
                    </li>
                    <li><input type="checkbox" id="cbMCVeg6" />
                    <label for="cbMCVeg6"><img src="menu/Main Course Veg/Kaju Paneer Cury.jpg"  ><div id="food_name">Kaju Paneer Curry</div><div id="food_cost">Rs 299</div></label>
                    </li>
                    <li><input type="checkbox" id="cbMCVeg7" />
                    <label for="cbMCVeg7"><img src="menu/Main Course Veg/Palak Paneer.jpg"  ><div id="food_name">Palak Paneer</div><div id="food_cost">Rs 240</div></label>
                    </li>
                    <li><input type="checkbox" id="cbMCVeg8" />
                    <label for="cbMCVeg8"><img src="menu/Main Course Veg/Aloo Gobi.jpg"  ><div id="food_name">Aloo Gobi Masala</div><div id="food_cost">Rs 199</div></label>
                    </li>
                    <li><input type="checkbox" id="cbMCVeg9" />
                    <label for="cbMCVeg9"><img src="menu/Main Course Veg/Paneer Makhani.jpg"  ><div id="food_name">Paneer Makhani</div><div id="food_cost">Rs 259</div></label>
                    </li>
                    <li><input type="checkbox" id="cbMCVeg10" />
                    <label for="cbMCVeg10"><img src="menu/Main Course Veg/Veg kofta.jpg"  ><div id="food_name">Veg. Kofta</div><div id="food_cost">Rs 145</div></label>
                    </li>
                    
                    
                  </ul>
            </div>
            
            <a name="Main_Course_Non_Veg"></a>
            <p id="phead"> Main course Non Veg. <hr></p>
            <div class=items>
                <ul>
                    <li><input type="checkbox" id="cbMCNon1" />
                      <label for="cbMCNon1"><img src="menu/Main Course Non Veg/Butter Chicken.png"  ><div id="food_name">Butter Chicken</div><div id="food_cost">Rs 280</div></label>
                    </li>
                    <li><input type="checkbox" id="cbMCNon2" />
                    <label for="cbMCNon2"><img src="menu/Main Course Non Veg/Chicken 65.png"  ><div id="food_name">Chicken 65</div><div id="food_cost">Rs 210</div></label>
                    </li>
                    <li><input type="checkbox" id="cbMCNon3" />
                    <label for="cbMCNon3"><img src="menu/Main Course Non Veg/Goan Prawn Curry.png"  ><div id="food_name">Goan Prawn Curry</div><div id="food_cost">Rs 380</div></label>
                    </li>
                    <li><input type="checkbox" id="cbMCNon4" />
                    <label for="cbMCNon4"><img src="menu/Main Course Non Veg/Grilled Chicken.jpg"  ><div id="food_name">Grilled Chicken</div><div id="food_cost">Rs 250</div></label>
                    </li>
                    <li><input type="checkbox" id="cbMCNon5" />
                    <label for="cbMCNon5"><img src="menu/Main Course Non Veg/Malabar Fish Biryani.png"  ><div id="food_name">Malabar Fish Biryani</div><div id="food_cost">Rs 299</div></label>
                    </li>
                    <li><input type="checkbox" id="cbMCNon6" />
                    <label for="cbMCNon6"><img src="menu/Main Course Non Veg/Mutton Korma.png"  ><div id="food_name">Mutton Korma</div><div id="food_cost">Rs 429</div></label>
                    </li>
                    <li><input type="checkbox" id="cbMCNon7" />
                    <label for="cbMCNon7"><img src="menu/Main Course Non Veg/Pina Colada Pork Ribs.png"  ><div id="food_name">Pina Colada Pork Ribs</div><div id="food_cost">Rs 480</div></label>
                    </li>
                    <li><input type="checkbox" id="cbMCNon8" />
                    <label for="cbMCNon8"><img src="menu/Main Course Non Veg/Tandoori Lamb Chops.png"  ><div id="food_name">Tandoori Lamb Chops</div><div id="food_cost">Rs 380</div></label>
                    </li>
                </ul>
            </div>

            <a name="Breads"></a>
            <p id="phead"> Breads <hr></p>
            <div class=items>
                <ul>
                    <li><input type="checkbox" id="cbB1" />
                      <label for="cbB1"><img src="menu/Breads/Plain Naan.jpg"  ><div id="food_name">Plain Naan</div><div id="food_cost">Rs 45</div></label>
                    </li>
                    <li><input type="checkbox" id="cbB2" />
                    <label for="cbB2"><img src="menu/Breads/Butter Naan.jpg"  ><div id="food_name">Butter Naan</div><div id="food_cost">Rs 55</div></label>
                    </li>
                    <li><input type="checkbox" id="cbB3" />
                    <label for="cbB3"><img src="menu/Breads/Butter Roti.jpg"  ><div id="food_name">Butter Roti</div><div id="food_cost">Rs 45</div></label>
                    </li>
                    <li><input type="checkbox" id="cbB4" />
                    <label for="cbB4"><img src="menu/Breads/Tandoori Roti.jpg"  ><div id="food_name">Tandoori Roti</div><div id="food_cost">Rs 50</div></label>
                    </li>
                    <li><input type="checkbox" id="cbB5" />
                    <label for="cbB5"><img src="menu/Breads/Missi Roti.jpeg"  ><div id="food_name">Missi Roti</div><div id="food_cost">Rs 55</div></label>
                    </li>
                    <li><input type="checkbox" id="cbB6" />
                    <label for="cbB6"><img src="menu/Breads/Lachha Paratha.jpg"  ><div id="food_name">Lachha Paratha</div><div id="food_cost">Rs 60</div></label>
                    </li>
                </ul>
            </div>

            <a name="Desserts"></a>
            <p id="phead"> Dessert <hr></p>
            <div class=items>
                <ul>
                    <li><input type="checkbox" id="cbDess1" />
                      <label for="cbDess1"><img src="menu/Dessert/Doodhpak.jpg"  ><div id="food_name">Doodhpak</div><div id="food_cost">Rs 55</div></label>
                    </li>
                    <li><input type="checkbox" id="cbDess2" />
                    <label for="cbDess2"><img src="menu/Dessert/Gajar ka halwa.jpg"  ><div id="food_name">Gajar ka Halwa</div><div id="food_cost">Rs 45</div></label>
                    </li>
                    <li><input type="checkbox" id="cbDess3" />
                    <label for="cbDess3"><img src="menu/Dessert/Gulab Jamun.jpg"  ><div id="food_name">Gulab Jamun</div><div id="food_cost">Rs 25</div></label>
                    </li>
                    <li><input type="checkbox" id="cbDess4" />
                    <label for="cbDess4"><img src="menu/Dessert/jalebi.jpg"  ><div id="food_name">Jalebi</div><div id="food_cost">Rs 8</div></label>
                    </li>
                    <li><input type="checkbox" id="cbDess5" />
                    <label for="cbDess5"><img src="menu/Dessert/Kesar Rasmalai.jpg"  ><div id="food_name">Kesar Rasmalai</div><div id="food_cost">Rs 65</div></label>
                    </li>
                    <li><input type="checkbox" id="cbDess6" />
                    <label for="cbDess6"><img src="menu/Dessert/Malai Kulfi.jpg"  ><div id="food_name">Malai Kulfi</div><div id="food_cost">Rs 35</div></label>
                    </li>
                    <li><input type="checkbox" id="cbDess7" />
                    <label for="cbDess7"><img src="menu/Dessert/Malpua.jpg"  ><div id="food_name">Malpua</div><div id="food_cost">Rs 16</div></label>
                    </li>
                    <li><input type="checkbox" id="cbDess8" />
                    <label for="cbDess8"><img src="menu/Dessert/Shahi Tukda.jpg"  ><div id="food_name">Shahi Tukda</div><div id="food_cost">Rs 39</div></label>
                    </li>
  
                  </ul>
            </div>
        </div>
        <div class="order_button">
            <span>🍲 🍰 🎍 🍯 🍭 🍪 🍩 🍨 🍢 🍣 🍛 🍗 🍕 🍯 🍭 🍪 🍩 🍨 🍢 🍡 🍣 🍛 🍗 🍕 🍔</span>
            <span><input type="submit" value="Order" name="Order" id="order"></span>
            <span>🍔 🍕 🍗 🍛 🍣 🍡 🍢 🍨 🍩 🍪 🍭 🍯 🍰 🍗 🍛 🍣 🍡 🍢 🍨 🍩 🍪 🍭 🍯 🍰 🍲</span>
        </div>
    </body>
</html>
