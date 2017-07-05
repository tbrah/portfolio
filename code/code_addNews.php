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

	//Exclude the techarray from the showcaseArray.

	$showcaseArray = [];

	foreach($_POST as $key => $value){
		if($key != "techarray"){
			$showcaseArray[$key] = $value;
		}
	}
	
	include ("incl_db.php");

	$crud = new Crud($objCon, "showcase");

	$crud->SetArray($showcaseArray);

    $cruds = $crud->Create();
	
    //$cruds = INSERT INTO showcase (`title`, `featured`, `desc`, `text`, `img`) VALUES('asdasdasd', '0', 'asdasd', ......

	mysqli_query($conn, $cruds);

	//Grabbing the last unique id from table.

	$showcase_id = mysqli_insert_id($conn);

	$showcase_tech = new Crud($objCon, "showcase_tech");

	foreach($array as $item){
		$newArray["showcase_id"] = $showcase_id;
		$newArray["tech_id"] = $item;

		$showcase_tech->SetArray($newArray);

		$showcase_techs = $showcase_tech->Create();

		$showcase_tech->SendSQL();
	}

	header("location: ../admin/index.php?news=created");
?> 