<?php
    $prefix = '../';
    $title = 'Typografi | Styleguide | Intellifinder';
?>
<html>

    <head>
        <?php include_once($prefix.'includes/header.php'); ?>
        <link rel="stylesheet" href="../assets/highlighter/prettify.css" />
    </head>
    
    <body class="styleguide">
        
        <div id="menu">
            
            <h1>Styleguide</h1>
        
            <ul>
                
                <li><a href="index.php">Hjem</a></li>
                <li><a href="logo.php">Logo</a></li>
                <li><a href="buttons.php">Knapper</a></li>
                <li><a href="forms.php">Forms</a></li>
                <li><a href="spacing.php">Afstand og Størrelse</a></li>
                <li><a href="colors.php">Farver</a></li>
                <li><a class="active" href="typography.php">Typografi</a></li>
                
            </ul>
            
        </div><!-- menu -->
        
        <div id="content">
        
            <div class="wrapper">
            
                <h1>Typografi</h1>
                
                <p>Der bliver brugt Montserrat fordi det giver teskten et varmt og spændende udtryk.</p>
                
                <h3>Montserrat:</h3>
                
                <div class="fontWrapper">
                
                    <div class="fontPreview" style="font-weight: 100; font-size: 90px;">Ae</div>
                    
                    <div class="allFontPreview" style="font-weight: 100;">ABCDEFGHIJKLMNOPQRSTUVWXYZ
abcdefghijklmnopqrstuvwxyz
1234567890(,.;:?!$&*)</div>
                    
                </div><!-- fontWrapper -->
                
                <div class="fontWrapper">
                
                    <div class="fontPreview" style="font-weight: bold; font-size: 90px;">Ae</div>
                    
                    <div class="allFontPreview" style="font-weight: bold;">ABCDEFGHIJKLMNOPQRSTUVWXYZ
abcdefghijklmnopqrstuvwxyz
1234567890(,.;:?!$&*)</div>
                    
                </div><!-- fontWrapper -->

                <div class="headers">
                
                    <h1>Header 1</h1>
                    
                    <h2>Header 2</h2>
                    
                    <h3>Header 3</h3>
                    
                    <h4>Header 4</h4>
                    
                    <h5>Header 5</h5>
                    
                    <h6>Header 6</h6>
                    
                </div>
                
                <p>Her ser vi Sass stylingen for<code>Montserrat</code>:</p>
                <pre class="prettyprint">
<code>* {

    font-family: 'Montserrat';

}</code></pre>
                
            </div><!-- wrapper -->
            
        </div><!-- content -->

        <script src="../assets/highlighter/prettify.js"></script>
        <script>prettyPrint();</script>
        
    </body>
    
</html>