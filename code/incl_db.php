<?php 

date_default_timezone_set("Europe/Copenhagen"); 

$objCon = new mysqli('localhost', 'root', 'root', 'portfolio');

$objCon->set_charset('utf8');

//Tester forbindelsen

if($objCon->connect_error) {


    die('Kan ikke forbinde (' . $objCon->connect_errno . ')' . $objCon->connect_error);



}

include ("functions.php");


//Require dynamisk classes
function autoload ($classname) {
    
    $newname = strtolower($classname);
    $backs = "";
    $e = 1;
    $i = 0;
    
    while($i == 0||$e > 100){
        
        if(file_exists($backs."classes/".$newname.".php")){
            
            $i = 1;
            
            require_once($backs."classes/".$newname.".php");
            
        } else {
            
            $backs .= "../";
            
            $e++;
            
        }
            
    }
}

spl_autoload_register("autoload");

?>