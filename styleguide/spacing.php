<?php
    $prefix = '../';
    $title = 'Afstand og Størrelse | Styleguide | Intellifinder';
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
                <li><a class="active" href="spacing.php">Afstand og Størrelse</a></li>
                <li><a href="colors.php">Farver</a></li>
                <li><a href="typography.php">Typografi</a></li>
                
            </ul>
            
        </div><!-- menu -->
        
        <div id="content">
        
            <div class="wrapper">
            
                <h1>Afstand og Størrelse</h1>
                
                <h2>Minumum størrelse</h2>
                
                <p>Minimum størrelsen på logoet skal være 265x45px, alt under det skal ses som et ikon.</p>
                
                <div class="imgWrapper">
                    
                    <img src="<?php echo $prefix; ?>assets/img/intellifinder_dark.svg" alt="logo" style="width: 260px; height:45px;">
                    
                </div><!-- imgWrapper -->
                
                <h2>Generel padding</h2>
                
                <p>Den generelle padding er 25px, det er med til at give siden en masse fri rum så tingende spiller bedre sammen.</p>
                
                <p>Her ser vi Sass stylingen for<code>Padding</code>:</p>
                <pre class="prettyprint">
<code>element {

    padding: 25px;

}</code></pre>
                
                <h2>Generel margin</h2>
                
                <p>Den generelle margin er 30px, det er med til at give siden en masse fri rum så tingende spiller bedre sammen.</p>
                
                <p>Her ser vi Sass stylingen for<code>Margin</code>:</p>
                <pre class="prettyprint">
<code>element {

    margin: 30px;

}</code></pre>
                
            </div><!-- wrapper -->
            
        </div><!-- content -->

        <script src="../assets/highlighter/prettify.js"></script>
        <script>prettyPrint();</script>
        
    </body>
    
</html>