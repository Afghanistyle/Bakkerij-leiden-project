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
  <script src="js/script.js"></script>
  <script src="js/superfish.js"></script>
  <script src="js/jquery.equalheights.js"></script>
  <script src="js/jquery.mobilemenu.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/tmStickUp.js"></script>
  <script src="js/jquery.ui.totop.js"></script>
  <script src="js/touchTouch.jquery.js"></script>
  
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
                  
                  <li><a href="bestellen.php">BESTELLEN</a></li>
                  <li><a href="admin">LOGIN</a></li>
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
          
          <div class="maxheight">

          
	<div class="header">
		<h2>Login</h2>
	</div>
	
  <div class="login-page">

    <form class="login-form">
      <input type="text" placeholder="username"/>
      <input type="password" placeholder="password"/>
      <button>login</button>
    </form>
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
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-linkedin"></a>

          </div>
          <div class="copyright"><span class="brand">BakkerijLeiden </span> &copy; <span id="copyright-year"></span> |
            <a href="#">Privacy Policy</a>
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