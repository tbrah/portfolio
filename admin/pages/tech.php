<?php

session_start();

if(isset($_SESSION['username'])){

$prefix = '../../';
    
include_once($prefix.'code/incl_db.php');
    
$title = 'Tech | Intellifinder';
$site = 'tech';

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

<!-- Page options -->
<?php include_once($prefix.'modules/backend/tech_module.php'); ?>

</body>
</html>


<?php
    
}else {
    
  header('Location: login.php?notLoggedIn=1');  
    
}

?>