<?php

$prefix = '';
$title = 'Portfolio';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once('includes/header.php'); ?>
    </head>
<body ng-app="portApp">

        <!--Header / Includes Laptop.php, Nav.php -->
        <?php include_once('modules/header.php');?>

        <!-- Intro -->
        <?php include_once('modules/intro.php');?>

        <!-- Github -->
        <?php include_once('modules/github.php');?>

        <!--Showcase-->
        <?php include_once('modules/showcase.php');?>

        <!--Reference-->
        <?php include_once('modules/reference.php');?>

        <!--Footer-->
        <?php include_once('modules/footer.php');?>

    
</body>
</html>