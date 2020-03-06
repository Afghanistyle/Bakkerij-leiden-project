<?php include('config.php'); ?>
<?php include('head.php');?>

<body onload="zoom()">
<!-- header -->
<header>

<!-- menu -->
<div class="container">
  <div class="row">
    <div class="grid_12">
      <h1>
        <a href="index.php">
          <img src="images/logo.png" alt="Logo alt">
          

          </a>
        </h1>
        <img src="images/stripes.png" class="stripes" alt="Logo alt">
        <div id='cssmenu'>
        
          <ul>
            <li>
              <a href='index.php'>
                <i class="fas fa-home"></i> Home
              </a>
            </li>
            <li>
              <a href='bestellen.php'>
                <i class="fas fa-shopping-cart"></i> Bestellen
              </a>
            </li>
            <ul></ul>
          </div>
        </header>
        <!-- content -->
        <section class="content gallery pad1">
          <div class="container">
            <div class="row">
              <div class="grid_3">
                <div class="gall_block">
                  <div class="maxheight">
                    <a href="images/bbig1.jpg" class="gall_item">
                      <img src="images/page2_img1.jpg" alt="">
                      </a>
                      <div class="gall_bot">
                        <div class="text1">Verassingspakket (1)</div>
                                    Hier komt informatie over het product
                                    
                        <br>
                          <a href="#" class="btn">
                            <i class="fas-fa-shopping-cart"></i> In Winkelmand €5.00
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="grid_3">
                    <div class="gall_block">
                      <div class="maxheight">
                        <a href="images/big3.jpg" class="gall_item">
                          <img src="images/page2_img2.jpg" alt="">
                          </a>
                          <div class="gall_bot">
                            <div class="text1">Verassingspakket (2)</div>
                                    Hier komt informatie over het product
                                    
                            <br>
                              <a href="#" class="btn">In Winkelmand €7.50</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="grid_3">
                        <div class="gall_block">
                          <div class="maxheight">
                            <a href="images/bbig3.jpg" class="gall_item">
                              <img src="images/page2_img3.jpg" alt="">
                              </a>
                              <div class="gall_bot">
                                <div class="text1">Verassingspakket (3)</div>
                                    Hier komt informatie over het product
                                    
                                <br>
                                  <a href="#" class="btn">In Winkelmand €10.00</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="grid_2">
                            <div class="gall_block">
                              <div class="maxheight">
                                <div class="gall_bot1">
                                  <ul>
                                  
                                  <?php include('tooltip.php');?>
                                      
                                        </ul>
                                        <br>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                          <?php include('footer.php');?>

                          <script type="text/javascript">
                            function zoom() {
                                document.body.style.zoom = "90%" 
                            }
                          </script>

                        </body>
                      </html>


