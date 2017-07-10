<?php

$prefix = '';
$title = 'Portfolio';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once('includes/header.php'); ?>
    </head>
<body ng-app="portApp" ng-class="{'scroll-lock': toggleFocus}">

        <!--Header / Includes Laptop.php, Nav.php -->
        <?php include_once('modules/header.php');?>

        <!-- Intro -->
        <?php include_once('modules/intro.php');?>

        <!-- Skillset -->
        <?php include_once('modules/skillset.php');?>

        <!--Treehouse-->
        <?php include_once('modules/treehouse.php');?>

        <!--Showcase-->
        <?php include_once('modules/showcase.php');?>

        <!--Reference-->
        <?php include_once('modules/reference.php');?>

        <!--Footer-->
        <?php include_once('modules/footer.php');?>

        <!--Alert toast-->
        <?php include_once('modules/alert.php');?>


</body>
</html>