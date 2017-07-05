<?php
	include ("incl_db.php");

    $id = $_GET['id'];

    $crud = new Crud($objCon, "showcase");

	$array = array("id"=>"$id");

	$crud->SetArray($array);

	$cruds = $crud->Delete();

	$crud->SendSQL();

	//Delete in showcase_tech aswell

	$delete_showcase_id = new Crud($objCon, "showcase_tech");

	$showcase_tech_array = array("showcase_id"=>"$id");

	$delete_showcase_id->SetArray($showcase_tech_array);

	$delete_showcase_ids = $delete_showcase_id->Delete();

	$delete_showcase_id->SendSQL();


	header('Location: ../admin/index.php?delete=1');

?>