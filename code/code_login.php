<?php

ini_set('display_errors', 1);

include('incl_db.php');

session_start(); 

$username = $_POST['username'];

$password = $_POST['password'];

$crud = new Crud($objCon, "port_login");
                
$crud->SetArray("*");

$cruds = $crud->Select("WHERE username = '$username' AND password = '$password'");

$res = $crud->SendSQL();

$obj = $res->fetch_object();

if(mysqli_num_rows($res) > 0){

    if($username == $obj->username && $password == $obj->password) 
    {

        $_SESSION['permission'] = 1;

        $_SESSION['username'] = $obj->username;

        header('Location: ../admin/index.php');

    }
    
    }//Num rows
    else {

       header('Location: ../admin/login.php?failed=1');
       
    }

?>