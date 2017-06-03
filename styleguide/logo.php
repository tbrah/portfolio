<?php
    $prefix = '../';
    $title = 'Logo | Styleguide | Intellifinder';
?>
<html>

    <head>
        <?php include_once($prefix.'includes/header.php'); ?>
    </head>
    
    <body class="styleguide">
        
        <div id="menu">
            
            <h1>Styleguide</h1>
        
            <ul>
                
                <li><a href="index.php">Hjem</a></li>
                <li><a class="active" href="logo.php">Logo</a></li>
                <li><a href="buttons.php">Knapper</a></li>
                <li><a href="forms.php">Forms</a></li>
                <li><a href="spacing.php">Afstand og Størrelse</a></li>
                <li><a href="colors.php">Farver</a></li>
                <li><a href="typography.php">Typografi</a></li>
                
            </ul>
            
        </div><!-- menu -->
        
        <div id="content">
        
            <div class="wrapper">
            
                <h1>Logo</h1>
                
                <h2>Logo varianter</h2>
                
                <div class="illustrations">
                
                    <div class="logoWrapper">

                        <img src="<?php echo $prefix; ?>assets/img/intellifinder_dark.svg" alt="logo">

                    </div><!-- logoWrapper -->

                    <div class="logoWrapper grey">

                        <img src="<?php echo $prefix; ?>assets/img/logo.svg" alt="logo">

                    </div><!-- logoWrapper -->
                    
                </div><!-- illustrations -->
                
                <h2>Alternativt logo</h2>
                
                <div class="logoWrapper">
                        <img src="<?php echo $prefix; ?>assets/img/intellifinder-alternative.svg" alt="logo">
                </div><!-- illustrations -->
                
            </div><!-- wrapper -->
            
        </div><!-- content -->
        
    </body>
    
</html>