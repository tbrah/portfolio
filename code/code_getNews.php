<?php

include('incl_db.php');

session_start(); 

$crud = new Crud($objCon, "showcase");
                
$crud->SetArray("*");

$cruds = $crud->Select('ORDER BY id DESC');

$res = $crud->SendSQL();

$syntax = '[';
 
while($obj = $res->fetch_object()){
 
    $syntax .= '{"id":"'.$obj->id.'", "url":"'.$obj->img.'", "desc":"'.$obj->desc.'", "title": "'.$obj->title.'", "featured": "'.$obj->featured.'", "text": "'.$obj->text.'"},';
 
}
 
$syntax = substr($syntax, 0, -1);
 
$syntax .= ']';

echo $syntax;

?>