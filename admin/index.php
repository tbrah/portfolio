<?php

session_start();

if(isset($_SESSION['username'])){

$prefix = '../';
    
include_once($prefix.'code/incl_db.php');
    
$title = 'News | Intellifinder';
$site = 'news';

?>
<!DOCTYPE html>
<html>
    <head>
        <?php include_once($prefix.'includes/header.php'); ?>
    </head>
<body class="dashboard">

<!-- TopBar -->
<?php include_once($prefix.'modules/backend/topbar.php'); ?>

<!-- MenuBar -->
<?php include_once($prefix.'modules/backend/menubar.php'); ?>

<!-- MenuBar -->
<?php include_once($prefix.'modules/backend/all_news.php'); ?>

</body>
</html>


<?php
    
}else {
    
  header('Location: login.php?notLoggedIn=1');  
    
}

?>