<?php
	error_reporting(0);
	
    if($_FILES["img"]["name"] != ""){

		$name = $_FILES["img"]["name"];
		$extension = end(explode(".",$name));
		$md5 = md5(uniqid(rand(), true));
		
		$collected = $md5 . "." .  $extension;

        $_POST['img'] = $collected;
		
		move_uploaded_file($_FILES['img']['tmp_name'], "../assets/img/uploaded/".$md5.".".$extension);

	} else {

		$collected = 'noimg.jpg';

        $_POST['img'] = $collected;

	}
	
	$array = $_POST["techarray"];
	$newArray = [];
	$showcase_id = 2;
	
	include ("incl_db.php");

	$test = new Crud($objCon, "showcase_tech");

	foreach($array as $item){
		$newArray["showcase_id"] = $showcase_id;
		$newArray["tech_id"] = $item;

		$test->SetArray($newArray);

		$tests = $test->Create();

		print_r($tests);

		echo "<br>";
	}

    $crud = new Crud($objCon, "showcase");

	$crud->SetArray($_POST);

    $cruds = $crud->Create();

	//print_r($cruds);

	//var_dump($_POST);

    //$crud->SendSQL();
    
    //header("location: ../admin/index.php?news=created");
?> 