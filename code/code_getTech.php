<?php

include('incl_db.php');

session_start(); 

$crud = new Crud($objCon, "showcase_tech");
                
$crud->SetArray("*");

$cruds = $crud->Select('ORDER BY showcase_id DESC');

$res = $crud->SendSQL();

$newArray = [];

while($obj = $res->fetch_object()){

    array_push($newArray, $obj);

}

echo json_encode($newArray);

?>