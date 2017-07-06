<?php

include('incl_db.php');

session_start(); 

//Select from showcase table

$crud = new Crud($objCon, "showcase");
                
$crud->SetArray("*");

$cruds = $crud->Select('ORDER BY id DESC');

$res = $crud->SendSQL();

//Select from tech_table

$tech_table = new Crud($objCon, "tech_table");

$tech_table->SetArray("*");

$tech_tables = $tech_table->Select('ORDER by id DESC');

$tech_table_res = $tech_table->SendSQL();

$tech_table_array = [];

while($tech_table_obj = $tech_table_res->fetch_object()){
    array_push($tech_table_array, $tech_table_obj);
}

//Select from showcase_tech table

$showcase_tech_table = new Crud($objCon, "showcase_tech");

$showcase_tech_table->SetArray("*");

$showcase_tech_tables = $showcase_tech_table->Select('ORDER BY showcase_id DESC');

$showcase_tech_table_res = $showcase_tech_table->SendSQL();

$showcase_tech_table_array = [];

while($showcase_tech_table_obj = $showcase_tech_table_res->fetch_object()){
    array_push($showcase_tech_table_array, $showcase_tech_table_obj);
}

//Creation of the json data

$syntax = '[';
 
while($obj = $res->fetch_object()){

    $matchArray = [];

    $finalString = '';

    foreach($showcase_tech_table_array as $key => $value){
        if($obj->id == $value->showcase_id){

            foreach($tech_table_array as $keytest => $valuetest){
                if($valuetest->id == $value->tech_id){
                    $finalString .= '{"id": "'.$valuetest->id.'", "title": "'.$valuetest->title.'", "img": "'.$valuetest->img.'"},';
                }

            }

        }
        
    }

    $finalString = rtrim($finalString, ',');
 
    $syntax .= '{
        "id":"'.$obj->id.'", 
        "url":"'.$obj->img.'", 
        "desc":"'.$obj->desc.'", 
        "title": "'.$obj->title.'", 
        "featured": "'.$obj->featured.'", 
        "text": "'.$obj->text.'",
        "techarray": ['.$finalString.'] 
        },';
 
}
 
$syntax = substr($syntax, 0, -1);
 
$syntax .= ']';

echo $syntax;

?>