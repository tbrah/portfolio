<?php
    $prefix = '../';
    $title = 'Knapper | Styleguide | Intellifinder';
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
                <li><a class="active" href="buttons.php">Knapper</a></li>
                <li><a href="forms.php">Forms</a></li>
                <li><a href="spacing.php">Afstand og Størrelse</a></li>
                <li><a href="colors.php">Farver</a></li>
                <li><a href="typography.php">Typografi</a></li>
                
            </ul>
            
        </div><!-- menu -->
        
        <div id="content">
        
            <div class="wrapper">
            
                <h1>Knapper</h1>
                
                <h2>Primære knapper</h2>
                
                <p>Knapperne er simple, men rammer stadig vores tema.</p>
                
                <div class="buttonsWrapper">
                
                    <a class="btn btn-success">CTA Knap</a>

                    <a class="btn btn-default">Simpel knap</a>

                    <a class="text-btn">Tekst knap</a>

                    <a><span><i class="fa fa-facebook"></i></span></a>
                    
                </div><!-- imgWrapper -->
                
                <p>Her ser vi Sass stylingen for<code>Knapper</code>:</p>
                <pre class="prettyprint">
<code>.btn {
    font-size: 20px;
    height: 50px;
    margin-bottom: 30px;
    line-height: 40px;
    border: none;
    display: inline-block;
    padding: 6px 12px;
    font-size: 14px;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
    box-shadow: 0px 3px 7px 0px rgba(0,0,0,0.16);
    transition: all 0.2s ease-in;
}

.btn-success{
    width:300px;
}

.btn-default{
    width:190px;
    color:$blue-font;
    margin-left: 30px;
}

.text-btn {
    float: left;
    color: #6772E5;
    transition: all 0.2s ease-in;
    font-weight: 500;
    font-size: 17px;
    line-height: 50px;
    margin-left: 20px;
    margin-right: 20px;
    &:hover {
        text-decoration: none;
        color: #32325d;
    }
    &::after {
        content: 'keyboard_arrow_right';
        font-family: 'Material Icons';
        font-weight: normal;
        font-style: normal;
        font-size: 24px;
        line-height: 50px;
        letter-spacing: normal;
        text-transform: none;
        display: inline-block;
        white-space: nowrap;
        word-wrap: normal;
        direction: ltr;
        -webkit-font-feature-settings: 'liga';
        -webkit-font-smoothing: antialiased;
        padding-top: 2px;
        position: absolute;
    }
}
span {
    display: inline-block;
    height: 55px;
    width: 55px;
    box-shadow: $standard-shadow;
    border-radius: 50%;
    margin-left: 20px;
    padding-top: 15px;
    text-align: center;
    transition: all 0.2s ease-in;
    &:hover {
        transform: translateY(-1px);
        box-shadow: $hover-shadow;
    }
    i {
        color: $blue-font;
        font-size: 28px;
        text-align: center;
    }
}</pre>
                
            </div><!-- wrapper -->
            
        </div><!-- content -->

        <script src="../assets/highlighter/prettify.js"></script>
        <script>prettyPrint();</script>
        
    </body>
    
</html>