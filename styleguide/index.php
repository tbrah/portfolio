<?php
    $prefix = '../';
    $title = 'Styleguide | Intellifinder';
?>
<html>

    <head>
        <?php include_once($prefix.'includes/header.php'); ?>
    </head>
    
    <body class="styleguide">
        
        <div id="menu">
            
            <h1>Styleguide</h1>
        
            <ul>
                
                <li><a class="active" href="index.php">Hjem</a></li>
                <li><a href="logo.php">Logo</a></li>
                <li><a href="buttons.php">Knapper</a></li>
                <li><a href="forms.php">Forms</a></li>
                <li><a href="spacing.php">Afstand og Størrelse</a></li>
                <li><a href="colors.php">Farver</a></li>
                <li><a href="typography.php">Typografi</a></li>
                
            </ul>
            
        </div><!-- menu -->
        
        <div id="content">
        
            <div class="wrapper">
            
                <h1>Velkommen til Intellifinder styleguide!</h1>
                
                <h2>Introduktion</h2>
                
                <p>Disse "guidelines" viser <strong>Intellifinders</strong> brand værdier og elementer. Styleguiden er regler og kode til at hjælpe med at komponere og producere spændende designs med en høj grad kreativitet</p>

                <img src="<?php echo $prefix; ?>assets/img/app-guts-ipad.svg" alt="Intro image">
                
            </div><!-- wrapper -->
            
        </div><!-- content -->
        
    </body>
    
</html>