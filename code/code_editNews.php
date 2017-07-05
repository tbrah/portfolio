<?php

	error_reporting(0);

   	include ("incl_db.php");

    $showcaseArray = [];

	foreach($_POST as $key => $value){
		if($key != "techarray"){
			$showcaseArray[$key] = $value;
		}
	}

    $id = $_GET['editId']; 

    $crud = new Crud($objCon, "showcase");

    $crud->SetArray($showcaseArray);

    $crud->Update("id", $id);

    $crud->SendSQL();

    //Delete old instances of the showcase_tech id and values

    $delete_showcase_id = new Crud($objCon, "showcase_tech");

	$array = array("showcase_id"=>"$id");

	$delete_showcase_id->SetArray($array);

	$delete_showcase_ids = $delete_showcase_id->Delete();

	$delete_showcase_id->SendSQL();

    // Create new section for updating showcase_tech

    $tech_array = $_POST["techarray"];
    $newArray = [];

    $showcase_tech = new Crud($objCon, "showcase_tech");

	foreach($tech_array as $item){
		$newArray["showcase_id"] = $id;
		$newArray["tech_id"] = $item;

		$showcase_tech->SetArray($newArray);

		$showcase_techs = $showcase_tech->Create();

		$showcase_tech->SendSQL();
	}

    header('Location: ../admin/index.php'); 

?>