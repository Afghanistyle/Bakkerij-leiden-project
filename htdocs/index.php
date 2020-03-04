<?php include('config.php'); ?>
<?php include('head.php');?>
<style>
.tooltip {
    display:inline-block;
    position:relative;
    text-align:left;
    
}

.tooltip h3 {margin:12px 0;}

.tooltip .right {
    min-width:200px;
    max-width:400px;
    top:50%;
    left:100%;
    margin-left:20px;
    transform:translate(0, -50%);
    padding:0;
    color:#EEEEEE;
    background-color:#444444;
    font-weight:normal;
    font-size:13px;
    border-radius:8px;
    position:absolute;
    z-index:99999999;
    box-sizing:border-box;
    box-shadow:0 1px 8px rgba(0,0,0,0.5);
    visibility:hidden; opacity:0; transition:opacity 0.8s;
}

.tooltip:hover .right {
    visibility:visible; opacity:1;
}

.tooltip .right img {
    width:400px;
    border-radius:8px 8px 0 0;
}
.tooltip .text-content {
    padding:10px 20px;
}

.tooltip .right i {
    position:absolute;
    top:50%;
    right:100%;
    margin-top:-12px;
    width:12px;
    height:24px;
    overflow:hidden;
}
.tooltip .right i::after {
    content:'';
    position:absolute;
    width:12px;
    height:12px;
    left:0;
    top:50%;
    transform:translate(50%,-50%) rotate(-45deg);
    background-color:#444444;
    box-shadow:0 1px 8px rgba(0,0,0,0.5);
}</style>
<body>
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
        <div class="slashes"></div>
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
                            <i class="fas-fa-shopping-cart"></i> In Winkelmand
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
                              <a href="#" class="btn">In Winkelmand</a>
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
                                  <a href="#" class="btn">In Winkelmand</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="grid_2">
                            <div class="gall_block">
                              <div class="maxheight">
                                <div class="gall_bot">
                                  <ul>

                                  <div class="tooltip">
                                  <img src="./images/allergenen/ei.png" height="75" width="75" />
    
                                    <div class="right">
                                        
                                        <div class="text-content">
                                            <h3>Allergenen</h3>
                                            <ul>
                                                <li>This demo has fade in/out effect.</li>
                                                <li>It is using CSS opacity, visibility, and transition property to toggle the tooltip.</li>
                                                <li>Other demos are using display property<em>(none or block)</em> for the toggle.</li>
                                            </ul>
                                        </div>
                                        <i></i>
                                    </div>
                                  </div>

                                  <div class="tooltip">
                                  <img src="./images/allergenen/ei.png" height="75" width="75" />
    
                                    <div class="right">
                                        
                                        <div class="text-content">
                                            <h3>Allergenen</h3>
                                            <ul>
                                                <li>This demo has fade in/out effect.</li>
                                                <li>It is using CSS opacity, visibility, and transition property to toggle the tooltip.</li>
                                                <li>Other demos are using display property<em>(none or block)</em> for the toggle.</li>
                                            </ul>
                                        </div>
                                        <i></i>
                                    </div>
                                  </div>

                                      
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
                        </body>
                      </html>