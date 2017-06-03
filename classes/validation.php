<?php

    class Validator
    {
       
       //Checker om str er blank
       public function Blank($str)
       {
           if(empty($str)){
               return true;
           }else{
               return false;
           }
       }//End blank
       
       //Checker om str er int
       public function Int($str)
       {
           if(is_int($str)){
               return true;
           }else{
               return false;
           }
       }//End Int
       
       //Checker om str er en email
       public function Email($str)
       {
           if(filter_var($str, FILTER_VALIDATE_EMAIL)){
        echo "True";
               return true;
           }else{
        echo "False";
               return false;
           }
       }//End Email
       
       //Checker om str er større end minLenght
       public function MinLenght($str, $minLenght)
       {
           if(strlen($str) >= $minLenght){
               return true;
           }else{
               return false;
           }
       }//End MinLenght
       
       //Checker om str er mindre end maxLenght
       public function MaxLenght($str, $maxLenght)
       {
           if(strlen($str) <= $maxLenght){
               return true;
           }else{
               return false;
           }
       }//End MaxLenght
       
    }//End Validator
    
?>