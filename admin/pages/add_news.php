<?php

session_start();

if(isset($_SESSION['username'])){

$prefix = '../../';
    
include_once($prefix.'code/incl_db.php');

if(isset($_GET['editId'])){
    
	$title = 'Edit news | Intellifinder';

}else {

	$title = 'Add news | Intellifinder';

}
$site = 'news';

?>
<!DOCTYPE html>
<html>
    <head>
        <?php include_once($prefix.'includes/header.php'); ?>
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=qc6708seu9rkh7cahr9qkwtnq3qwus0dma0zy4dafilsyb9k"></script>
  		<script>

  			tinyMCE.init({
			    // General options
			    mode : "textareas"
			});

  		</script>
    </head>
<body class="dashboard">

<!-- TopBar -->
<?php include_once($prefix.'modules/backend/topbar.php'); ?>

<!-- MenuBar -->
<?php include_once($prefix.'modules/backend/menubar.php'); ?>

<!-- Add News -->
<?php include_once($prefix.'modules/backend/add_news.php'); ?>

</body>
</html>


<?php
    
}else {
    
  header('Location: login.php?notLoggedIn=1');  
    
}

?>