<?php

	error_reporting(0);

   	include ("incl_db.php");

    $id = $_GET['editId']; 

    $crud = new Crud($objCon, "tech_table");

    $crud->SetArray($_POST);

    $crud->Update("id", $id);

    $crud->SendSQL();

    header('Location: ../admin/index.php'); 

?>