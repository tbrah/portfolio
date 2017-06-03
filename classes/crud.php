<?php

    //error_reporting(0);

    class Crud Extends Database 
    {
        private $objCon;
        private $table;
        private $sql;
        private $cArray;


        function __construct($connection, $table) 
       {
           $this->objCon = $connection;
           $this->table = $table;
       } 
       
       public function SwapTable($table)
       {
           $this->table = $table;
       }
       
       /*
            * $input skal være enten et Array eller en String (f.eks. id, navn, bil) 
       */
       
       public function SetArray($input)
       {
           if(is_array($input)){
               $this->cArray = $input;
           }else {
               $exploded = explode(", ",$input);
               $this->cArray = $exploded;
               return $this->cArray;
           }
       }
       
       public function Select($extension)
       {
           
           $values = "";

           foreach ($this->cArray as $key => $value) {
               
                $values .= "".$value.", ";

            }
            
            $values = rtrim($values, ", ");
            
            $sql = "SELECT $values FROM $this->table $extension"; //SELECT "*" FROM "users" "WHERE id = 1"($values - $this->table - $extension)
            
            $this->sql = $sql; 
            
            return $this->sql;
       }
       
       public function SendSQL()
       {
           if($res = $this->objCon->query($this->sql)) {
               return $res;
           } else {
               return null;
           }
       }
       
       public function Create()
       {
          $values = "";
          $keys = "";

           foreach ($this->cArray as $key => $value) {
               
               $keys .= "`" . $key . "`, " ;
                
               $values .= "'".$value."', ";

            }
            
            $keys = rtrim($keys, ", ");
            
            $values = rtrim($values, ", ");
            
            $sql = "INSERT INTO $this->table ($keys) VALUES($values)";
            
            $this->sql = $sql; 
            
            return $this->sql; 
       }
       
       public function Update($row, $asset)
       {
        
            foreach ($this->cArray as $key => $value) {

                $keys .= "`$key` = '$value', ";

            }

            $keys = rtrim($keys, ", ");

            $sql = "UPDATE $this->table SET $keys WHERE $row = '$asset'";
            
            $this->sql = $sql; 
            
            return $this->sql;
        
        }
       
        /*
         * $type er hvis der er mere end 1 kriterie så er $type enten && eller ||.  
        */
       public function Delete($type = "")
       {
          $string = "";

           foreach ($this->cArray as $key => $value) {
               
               $string .= "`".$key."` = '".$value."' ".$type." ";//"'navn' = 'mikkel' && "

            }
            
            $sql = "DELETE FROM $this->table WHERE $string";
            
            $this->sql = $sql; 
            
            return $this->sql; 
       }
       
    }

?>