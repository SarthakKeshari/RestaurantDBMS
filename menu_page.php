
<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&family=Satisfy&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="menu.css" type=text/css>
        <script src="https://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
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
            $conn = mysqli_connect("localhost", "root", "", "restaurant");
            // Check connection
            if ($conn->connect_error)
            {
            die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM menu";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) 
            {?>
                <a name="Soups"></a>
                <p id="phead">Soups<hr></p>
                <div class=items>
                  <ul>
                  <?php while($row = $result->fetch_assoc()) 
                  { if($row['menu_categories_id'] == 1){ ?>
                    <li><input type="checkbox" name="check_<?php echo $row['item_id'] ;?>" id="cbsoups<?php echo $row['item_id'];?>" value="<?php echo $row['item_id'];?>" />
                      <label for="cbsoups<?php echo $row['item_id'];?>" ><img src="menu/Soups/peanut masala.png"  ><div id="food_name"><?php echo $row['item'] ?></div><div id="food_cost"><?php echo $row['item_price'] ?></div></label>
                    </li>
                  <?php 
                  } 
                }?>
                  </ul>
                </div>
                <?php  $result2 = $conn->query($sql); ?>
                <a name="Snacks"></a>
                <p id="phead">Snacks<hr></p>
                <div class=items>
                  <ul>
                  <?php while($row = $result2->fetch_assoc()) 
                  { if($row['menu_categories_id'] == 2){?>
                   <li><input type="checkbox"name="check_<?php echo $row['item_id'] ;?>" id="cbsnacks<?php echo $row['item_id'];?>" value="<?php echo $row['item_id'];?>"  />
                      <label for="cbsnacks<?php echo $row['item_id'];?>"><img src="menu/Soups/peanut masala.png"  ><div id="food_name"><?php echo $row['item'] ?></div><div id="food_cost"><?php echo $row['item_price'] ?></div></label>
                    </li>
                  <?php 
                  } 
                }?>
                  </ul>
                </div>

                <?php  $result3 = $conn->query($sql); ?>
                <a name="Starters_Veg"></a>
                <p id="phead"> Starters Veg.<hr></p>
                <div class=items>
                  <ul>
                  <?php while($row = $result3->fetch_assoc()) 
                  { if($row['menu_categories_id'] == 3){?>
                   <li><input type="checkbox"  name="check_<?php echo $row['item_id'] ;?>" id="cbVegStarters<?php echo $row['item_id'];?>" value="<?php echo $row['item_id'];?>" />
                      <label for="cbVegStarters<?php echo $row['item_id'];?>"><img src="menu/Soups/peanut masala.png"  ><div id="food_name"><?php echo $row['item'] ?></div><div id="food_cost"><?php echo $row['item_price'] ?></div></label>
                    </li>
                  <?php 
                  } 
                }?>
                  </ul>
                </div>

                <?php  $result4 = $conn->query($sql); ?>
                <a name="Starters_Non_Veg"></a>
                <p id="phead">Starters Non Veg. <hr></p>
                <div class=items>
                  <ul>
                  <?php while($row = $result4->fetch_assoc()) 
                  { if($row['menu_categories_id'] == 4){?>
                   <li><input type="checkbox" name="check_<?php echo $row['item_id'] ;?>" id="cbNonVegStarters<?php echo $row['item_id'];?>" value="<?php echo $row['item_id'];?>"  />
                      <label for="cbNonVegStarters<?php echo $row['item_id'];?>"><img src="menu/Soups/peanut masala.png"  ><div id="food_name"><?php echo $row['item'] ?></div><div id="food_cost"><?php echo $row['item_price'] ?></div></label>
                    </li>
                  <?php 
                  } 
                }?>
                  </ul>
                </div>

                <?php  $result5 = $conn->query($sql); ?>
                <a name="Main_Course_Veg"></a>
                <p id="phead"> Main Course Veg. <hr></p>
                <div class=items>
                  <ul>
                  <?php while($row = $result5->fetch_assoc()) 
                  { if($row['menu_categories_id'] == 6){?>
                   <li><input type="checkbox"  name="check_<?php echo $row['item_id'] ;?>" id="cbMCVeg<?php echo $row['item_id'];?>" value="<?php echo $row['item_id'];?>" />
                      <label for="cbMCVeg<?php echo $row['item_id'];?>"><img src="menu/Soups/peanut masala.png"  ><div id="food_name"><?php echo $row['item'] ?></div><div id="food_cost"><?php echo $row['item_price'] ?></div></label>
                    </li>
                  <?php 
                  } 
                }?>
                  </ul>
                </div>

                <?php  $result6 = $conn->query($sql); ?>
                <a name="Main_Course_Non_Veg"></a>
                <p id="phead"> Main course Non Veg. <hr></p>
                <div class=items>
                  <ul>
                  <?php while($row = $result6->fetch_assoc()) 
                  { if($row['menu_categories_id'] == 6){?>
                   <li><input type="checkbox"  name="check_<?php echo $row['item_id'] ;?>" id="cbMCNon<?php echo $row['item_id'];?>" value="<?php echo $row['item_id'];?>"/>
                      <label for="cbMCNon<?php echo $row['item_id'];?>"><img src="menu/Soups/peanut masala.png"  ><div id="food_name"><?php echo $row['item'] ?></div><div id="food_cost"><?php echo $row['item_price'] ?></div></label>
                    </li>
                  <?php 
                  } 
                }?>
                  </ul>
                </div>

                <?php  $result7 = $conn->query($sql); ?>
                <a name="Breads"></a>
                <p id="phead">Breads<hr></p>
                <div class=items>
                  <ul>
                  <?php while($row = $result7->fetch_assoc()) 
                  { if($row['menu_categories_id'] == 7){?>
                   <li><input type="checkbox"   name="check_<?php echo $row['item_id'] ;?>" id="cbB<?php echo $row['item_id'];?>" value="<?php echo $row['item_id'];?>"/>
                      <label for="cbB<?php echo $row['item_id'];?>"><img src="menu/Soups/peanut masala.png"  ><div id="food_name"><?php echo $row['item'] ?></div><div id="food_cost"><?php echo $row['item_price'] ?></div></label>
                    </li>
                  <?php 
                  } 
                }?>
                  </ul>
                </div>

                <?php  $result8 = $conn->query($sql); ?>
                <a name="Desserts"></a>
                <p id="phead">Dessert<hr></p>
                <div class=items>
                  <ul>
                  <?php while($row = $result8->fetch_assoc()) 
                  { if($row['menu_categories_id'] == 8){?>
                   <li><input type="checkbox"   name="check_<?php echo $row['item_id'] ;?>" id="cbDess<?php echo $row['item_id'];?>" value="<?php echo $row['id'];?>"/>
                      <label for="cbDess<?php echo $row['item_id'];?>"><img src="menu/Soups/peanut masala.png"  ><div id="food_name"><?php echo $row['item'] ?></div><div id="food_cost"><?php echo $row['item_price'] ?></div></label>
                    </li>
                  <?php 
                  } 
                }?>
                  </ul>
                </div>
            <?php 
              
            }
            $conn->close();
          ?>
          
 
        </div>
            <input type="hidden" value="<?php echo $_SESSION['user_id'];?>" name="user" id="user" />
        <div class="order_button">
            <span>🍲 🍰 🎍 🍯 🍭 🍪 🍩 🍨 🍢 🍣 🍛 🍗 🍕 🍯 🍭 🍪 🍩 🍨 🍢 🍡 🍣 🍛 🍗 🍕 🍔</span>
            <span><input type="button" value="Order" name="Order" id="order"></span>
            <span>🍔 🍕 🍗 🍛 🍣 🍡 🍢 🍨 🍩 🍪 🍭 🍯 🍰 🍗 🍛 🍣 🍡 🍢 🍨 🍩 🍪 🍭 🍯 🍰 🍲</span>
        </div>
    </body>

    <script type="text/javascript">
      //var myArray=new Array(135);

      $(document).ready(function() {

      
        $("#order").click(function(){
          console.log("hhbnk",$('#user').val());
          let myArray = [];
          var i=0;
          for ( var j = 112; j <=174; j++){ 
          var check=$('input:checkbox[name=check_'+j+']').is(':checked');
            if(check==true){
              myArray[i]= j;
              i++;
            }
             
          }

          console.log("checked values",myArray);
          $.post("menu_action.php",
          {
            product_id:myArray,
            user_id: $("#user").val(),
          },
          function(message, status){
            console.log(message);
            console.log(status);
            window.location.href = "http://localhost/sarthak/RestaurantDBMS/c_your_detail_page.php";

            if(status ==  200){
            
            }
           
          }
          );
                
        });
       
       
      
      })

   
   
    </script>
</html>
