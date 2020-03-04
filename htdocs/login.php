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

<style>

@charset "utf-8";
@import url(http://weloveiconfonts.com/api/?family=fontawesome);

[class*="fontawesome-"]:before {
  font-family: 'FontAwesome', sans-serif;
}

body {
  background: #2c3338;
  color: #606468;
  font: 87.5%/1.5em 'Open Sans', sans-serif;
  margin: 0;
  height: 150%;
}

input {
  border: none;
  font-family: 'Open Sans', Arial, sans-serif;
  font-size: 16px;
  line-height: 1.5em;
  padding: 0;
  -webkit-appearance: none;
}

p {
  line-height: 1.5em;
}

after { clear: both; }

#login {
  margin: 50px auto;
  width: 320px;
}

#login form {
  margin: auto;
  padding: 22px 22px 22px 22px;
  width: 100%;
  border-radius: 5px;
  background: #282e33;
  border-top: 3px solid #434a52;
  border-bottom: 3px solid #434a52;
}

#login form span {
  background-color: #363b41;
  border-radius: 3px 0px 0px 3px;
  border-right: 3px solid #434a52;
  color: #606468;
  display: block;
  float: left;
  line-height: 50px;
  text-align: center;
  width: 50px;
  height: 50px;
}

#login form input[type="text"] {
  background-color: #3b4148;
  border-radius: 0px 3px 3px 0px;
  color: #a9a9a9;
  margin-bottom: 1em;
  padding: 0 16px;
  width: 235px;
  height: 50px;
}

#login form input[type="password"] {
  background-color: #3b4148;
  border-radius: 0px 3px 3px 0px;
  color: #a9a9a9;
  margin-bottom: 1em;
  padding: 0 16px;
  width: 235px;
  height: 50px;
}

#login form input[type="submit"] {
  background: #b5cd60;
  border: 0;
  width: 100%;
  height: 40px;
  border-radius: 3px;
  color: white;
  cursor: pointer;
  transition: background 0.3s ease-in-out;
}
#login form input[type="submit"]:hover {
  background: #16aa56;
}</style>


  <!-- content -->
  <section class="content gallery pad1">
    <div class="container">
      <div class="row">
      <div class="grid_4">
          
          <div class="maxheight">

          
	<div class="header">
		<h2>Login</h2>
	</div>
	
  <div id="login">
      <form name='form-login'>
        <span class="fontawesome-user"></span>
          <input type="text" id="user" placeholder="Username">
       
        <span class="fontawesome-lock"></span>
          <input type="password" id"pass" placeholder="Password">
        
        <input type="submit" value="Login">

</form>
           
       
     
      

      </div>
    </div>
  </div>
  </section>
 