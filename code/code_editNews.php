<?php

	error_reporting(0);

   	include ("incl_db.php");

    $id = $_GET['editId']; 

    // Date
	date_default_timezone_set('Europe/Copenhagen');
	$date = date('Y/m/d');

	$_POST['dat'] = $date;

    $crud = new Crud($objCon, "intelli_news");

    $crud->SetArray($_POST);

    $crud->Update("id", $id);

    $crud->SendSQL();

    header('Location: ../admin/index.php?edit=1');

?>