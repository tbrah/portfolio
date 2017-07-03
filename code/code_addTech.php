<?php
	error_reporting(0);
	
    if($_FILES["img"]["name"] != ""){

		$name = $_FILES["img"]["name"];
		$extension = end(explode(".",$name));
		$md5 = md5(uniqid(rand(), true));
		
		$collected = $md5 . "." .  $extension;

        $_POST['img'] = $collected;
		
		move_uploaded_file($_FILES['img']['tmp_name'], "../assets/img/uploaded/tech/".$md5.".".$extension);

	} else {

		$collected = 'noimg.jpg';

        $_POST['img'] = $collected;

	}

    include ("incl_db.php");

    $crud = new Crud($objCon, "tech_table");

	$crud->SetArray($_POST);

    $cruds = $crud->Create();

    $crud->SendSQL();
    
    header("location: ../admin/index.php?tech=created");
?> 