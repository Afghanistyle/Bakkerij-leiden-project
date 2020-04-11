<?php include('includes/database.php');?>
<?php include('includes/head.php');?>

<?php
$status = "";
//session_start();
if (isset($_POST['desc']) && $_POST['desc'] != "")
{
    $desc = $_POST['desc'];
    $result = mysqli_query($con, "SELECT * FROM `products` WHERE `desc`='$desc'");
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $desc = $row['desc'];
    $price = $row['price'];
    $image = $row['image'];

    $cartArray = array(
        $desc => array(
            'name' => $name,
            'desc' => $desc,
            'price' => $price,
            'quantity' => 1,
            'image' => $image
        )
    );

    if (empty($_SESSION["shopping_cart"]))
    {
        $_SESSION["shopping_cart"] = $cartArray;
        $status = "<div class='box' style='color:#cfd84a;'>Het artikel is toegevoegd aan winkelmand!</div>";  
    }
    else
    {
        $array_keys = array_keys($_SESSION["shopping_cart"]);
        if (in_array($desc, $array_keys))
    {
        $status = "<div class='box' style='color:#cfd84a;'>Het artikel is toegevoegd aan winkelmand!</div>";  
    }
    else
    {
        $_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"], $cartArray);
        $status = "<div class='box' style='color:#cfd84a;'>Het artikel is toegevoegd aan winkelmand!</div>"; 
        }
    }
}
?>

<style>
.message_box .box{
    position: relative;
    bottom: 10px;
    text-align: center;
    font-weight: bold;
    margin: auto;
    text-transform: uppercase;
}

</style>

<body>

<!-- header -->
<header>

<!-- menu -->
<div class="container">
  <div class="row"></div>
    <div class="grid_12">
      <h1>
        <a href="index.php">
          <img src="images/logo.png" alt="Logo alt">
          <img src="images/stripes.png" class="stripes" alt="Logo alt">
          </a>
        </h1>
        
        <div id='cssmenu'>
        
          <ul>
            <li>
              <a href='index.php'>
                <i class="fas fa-home"></i> Home
              </a>
            </li>
            <li>
              <a href='winkelmand.php'>
                <i class="fas fa-shopping-cart"></i> Winkelmand
              </a>
              
            </li>
            <ul></ul>
          </div>
        </header>
       
        <!-- content -->
       <h2> Producten </h2>
       <div class="message_box" style="margin:10px 0px;">
            <?php echo $status; ?> 
       </div>
       
       <div class="content gallery">
          <div class="container">
            <div class="row">
              <div class="grid_4">
                <div class="gall_block">
                  <div class="maxheight">
                    <a href="images/bbig1.jpg" class="gall_item">
                      <img src="images/tas.jpg" alt="">
                      </a>
                      <div class="gall_bot">
                      
                        <div class="text1">Verassingspakket (1)</div>
                                    Hier komt informatie over het product
                                    <br>
                                   
                          <?php if (!empty($_SESSION["shopping_cart"]))
                          {
                          $cart_count = count(array_keys($_SESSION["shopping_cart"])); ?>
                          <?php
                          }
                          $result = mysqli_query($con, "SELECT * FROM `products` where `id` = 1");
                          while ($row = mysqli_fetch_assoc($result))
                          {
                            echo "<div class='product_wrapper'>
                            <form method='post' action=''>
                            <input type='hidden' name='desc' value=" . $row['desc'] . " />
                            <button type='submit' class='btn'>IN WINKELWAGEN €5.00</button>
                            </form>
                            </div>";
                          } ?>
          
                        </div>
                      </div>
                    </div>
                  </div>
                      
                  <div class="grid_4">
                    <div class="gall_block">
                      <div class="maxheight">
                        <a href="images/big3.jpg" class="gall_item">
                          <img src="images/page2_img2.jpg" alt="">
                          </a>
                          <div class="gall_bot">
                            <div class="text1">Verassingspakket (2)</div>
                            Hier komt informatie over het product

                            <?php if(!empty($_SESSION[ "shopping_cart"])) { $cart_count=count(array_keys($_SESSION[ "shopping_cart"])); ?>
                       
                            <?php } $result=mysqli_query($con, "SELECT * FROM `products` where `id` = 2"); 
                            while($row=mysqli_fetch_assoc($result)){ echo "<div class='product_wrapper'>
                            <form method='post' action=''>
                            <input type='hidden' name='desc' value=".$row['desc']." />
                            <button type='submit' class='btn'>IN WINKELWAGEN €7.50</button>
                            </form>
                            </div>"; } ?>

                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="grid_4">
                        <div class="gall_block">
                          <div class="maxheight">
                            <a href="images/bbig3.jpg" class="gall_item">
                              <img src="images/page2_img3.jpg" alt="">
                              </a>
                              <div class="gall_bot">
                                <div class="text1">Verassingspakket (3)</div>
                                    Hier komt informatie over het product
                                    
                                  <?php if(!empty($_SESSION[ "shopping_cart"])) { $cart_count=count(array_keys($_SESSION[ "shopping_cart"])); ?>
                                  <?php } $result=mysqli_query($con, "SELECT * FROM `products` where `id` = 3"); 
                                  while($row=mysqli_fetch_assoc($result)){ echo "<div class='product_wrapper'>
                                  <form method='post' action=''>
                                  <input type='hidden' name='desc' value=".$row['desc']." />
                                  <button type='submit' class='btn'>IN WINKELWAGEN €10.00</button>
                                  </form>
                                  </div>"; } ?>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              <?php include('includes/footer.php');?>
            </body>
          </html>