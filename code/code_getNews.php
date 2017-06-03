<?php

include('incl_db.php');

session_start(); 

$crud = new Crud($objCon, "intelli_news");
                
$crud->SetArray("*");

$cruds = $crud->Select('ORDER BY id DESC');

$res = $crud->SendSQL();

$syntax = '[';
 
while($obj = $res->fetch_object()){
 
    $syntax .= '{"id":"'.$obj->id.'", "url":"'.$obj->img.'", "des":"'.$obj->des.'"},';
 
}
 
$syntax = substr($syntax, 0, -1);
 
$syntax .= ']';

echo $syntax;

?>