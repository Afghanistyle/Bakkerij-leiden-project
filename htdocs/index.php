<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo SRV_NAME; ?></title>
  <meta charset="utf-8">
  <meta name="format-detection" content="telephone=no" />
  <!-- Favicons -->
  <link rel="icon" href="images/favicon.ico">
  <link rel="shortcut icon" href="images/favicon.ico" />
  <link rel="stylesheet" href="css/style.css?v=1.1">
  <!-- Scripts-->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-migrate-1.1.1.js"></script>
  <script src="js/jquery.equalheights.js"></script>
  <script src="js/jquery.mobilemenu.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.ui.totop.js"></script>
  <!-- https://fontawesome.com/ -->
  <script src="https://kit.fontawesome.com/ba6de2795c.js" crossorigin="anonymous"></script>
 
</head>

<body>
  <!-- header -->
  <header>
    <!-- menu -->
    <section id="stuck_container">
      <div class="container">
        <div class="row">
          <div class="grid_12">
            <h1>
              <a href="index.html">
                <img src="images/logo.png" alt="Logo alt">
              </a>
            </h1>
            <div class="navigation ">
              <nav>
                <ul class="sf-menu">
                <li class="current"><a href="index.php">HOME</a></li>
                  
                  <li><a href="bestellen.php"><i class="fas fa-shopping-cart"></i> BESTELLEN</a></li>
                  <li><a href="login.php">LOGIN</a></li>
                </ul>
              </nav>
              <div class="clear"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </header>

  <!-- content -->
  <section class="content gallery pad1">
    <div class="container">
      <div class="row">
        <div class="grid_4">
          <div class="gall_block">
            <div class="maxheight">
              <a href="images/bbig1.jpg" class="gall_item"><img src="images/page2_img1.jpg" alt=""></a>
              <div class="gall_bot">
                <div class="text1"><a href="#">Lorem Ipsum</a></div>
                tortor vitae purus faucibus ornare suspendisse sed nisi lacus sed viverra tellus in hac habitasse
                <br>
                <a href="#" class="btn"><i class="fas-fa-shopping-cart"></i>Bestel</a>
              </div>
            </div>
          </div>
        </div>
        <div class="grid_4">
          <div class="gall_block">
            <div class="maxheight">
              <a href="images/big3.jpg" class="gall_item"><img src="images/page2_img2.jpg" alt=""></a>
              <div class="gall_bot">
                <div class="text1"><a href="#">Lorem Ipsum </a></div>
                tortor vitae purus faucibus ornare suspendisse sed nisi lacus sed viverra tellus in hac habitasse
                <br>
                <a href="#" class="btn">more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="grid_4">
          <div class="gall_block">
            <div class="maxheight">
              <a href="images/bbig3.jpg" class="gall_item"><img src="images/page2_img3.jpg" alt=""></a>
              <div class="gall_bot">
                <div class="text1"><a href="#">Lorem Ipsum </a></div>
                tortor vitae purus faucibus ornare suspendisse sed nisi lacus sed viverra tellus in hac habitasse
                <br>
                <a href="#" class="btn">more</a>
              </div>
            </div>
          </div>
        </div>

        <div class="grid_4">
          <div class="gall_block">
            <div class="maxheight">
              <a href="images/bbig3.jpg" class="gall_item"><img src="images/page2_img3.jpg" alt=""></a>
              <div class="gall_bot">
                <div class="text1"><a href="#">Lorem Ipsum </a></div>
                tortor vitae purus faucibus ornare suspendisse sed nisi lacus sed viverra tellus in hac habitasse
                <br>
                <a href="#" class="btn">more</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    </div>
  </section>
  <!-- footer -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="grid_12">
          <div class="socials">
            <a href="#" class="fab fa-facebook"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-youtube"></a>
            <a href="#" class="fab fa-linkedin"></a>

          </div>
          <div class="copyright"><span class="brand">BakkerijLeiden </span> &copy; <span id="copyright-year"></span> |
            <!-- <a href="#">Privacy Policy</a> --> Alle handelsmerken en logo's zijn eigendom van hun respectieve eigenaars.

            <div>Website designed by <a href="http://www.mborijnland.nl" rel="nofollow">Martijn, Aron, Abulbari,
                Bilal</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- <script>
    $(document).ready(function () {

      $().UItoTop({ easingType: 'easeOutQuart' });
      $('#stuck_container').tmStickUp({});
      $('.gallery .gall_item').touchTouch();

    }); 
  </script> -->

</body>

</html>