<?php
    $prefix = '../';
    $title = 'Farver | Styleguide | Intellifinder';
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
                <li><a class="active" href="colors.php">Farver</a></li>
                <li><a href="typography.php">Typografi</a></li>
                
            </ul>
            
        </div><!-- menu -->
        
        <div id="content">
        
            <div class="wrapper">
            
                <h1>Farver</h1>
                
                <h2>Primære farver</h2>
                
                <p>Disse primære "flade" farver er med til at fuldføre temaet. Det er varme og bløde farver.</p>
                
                <div class="imgWrapper">
                
                    <div class="colorBox" style="background: #FAA61A;"></div>
                    
                    <div class="colorBox" style="background: #e26626;"></div>
                    
                </div><!-- imgWrapper -->
                
                <h2>Alle farver</h2>
                
                <p>Alle farverne er varme og vigtigst af alt nøglen til at skabe Intellifinders tema.</p>

                <div class="imgWrapper">
                
                    <div class="colorBox" style="background: #FAA61A;"></div>
                    
                    <div class="colorBox" style="background: #e26626;"></div>
                    
                    <div class="colorBox" style="background: #3ECF8E;"></div>
                    
                    <div class="colorBox" style="background: #7795F8;"></div>

                    <div class="colorBox" style="background: #6B7C93;"></div>

                    <div class="colorBox" style="background: #F6F9FC;"></div>
                    
                </div><!-- imgWrapper -->
                
                <p>Her ser vi farvekoderne til<code>Alle farver</code>:</p>
                <pre class="prettyprint">
<code>/* Primary colors */

$primary-orange: #FAA61A;
$primary-moron: #e26626;
$primary-green: #3ECF8E;

/* Text colors */
$text-color: #6B7C93;
$blue-font: #7795F8;

/* Background colors */
$graytone-background: #F6F9FC;
</code></pre>
                
            </div><!-- wrapper -->
            
        </div><!-- content -->

        <script src="../assets/highlighter/prettify.js"></script>
        <script>prettyPrint();</script>
        
    </body>
    
</html>