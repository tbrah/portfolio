<?php

$prefix = '../';
$title = 'Login | Intellifinder';

?>
<!DOCTYPE html>
<html>
    <head>
        <?php include_once($prefix.'includes/header.php'); ?>
    </head>
<body>

<header>
  <div class="header-background special">
    <div class="skewWrapper">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-5" style="float: none;">
        <div id="loginBox">

        <h2>Login</h2>

          <form action="../code/code_login.php" method="post">

            <label>
            
              <input type="text" name="username" required autofocus>
              <span class="floating-label">Username</span>

            </label>

            <label>
            
              <input type="password" name="password" required>
              <span class="floating-label">Password</span>

            </label>

            <label>
            
              <input type="submit" value="Login">

            </label>

          </form>
        </div>
      </div>
  </div>
</header>

</body>
</html>