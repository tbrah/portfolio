<?php  
  
    function validateData($validator, $type, $asset = "none"){
      
        $errors = array();
      
        if($type=="isEmpty"){
          
            foreach ($validator as $key => $value) {
                if($value == ""){
                    
                    if($asset=="keys"){
                    
                    $errors[] = $key;
                    
                    } else {
                        
                        return false;
                    }
                } else {
                    return true;    
                }
            }

        } else if ($type=="isEmail"){
            
            if (!filter_var($validator, FILTER_VALIDATE_EMAIL)) {
                
                return false;
                        
                
            }
            
        } else if ($type=="pass_rep"){
            
            if($validator!=$asset){
                
                return false;
                        
                
                
            }
            
        } else if ($type=="containNumber"){
            
            if (preg_match('/\w+\s?\d+/', $validator)){
        
            } else {
                
                return false;
                        
                
                
            }
            
        } else if($type=="isInt"){
            
            if(ctype_digit($validator)){
        
            } else {
                
                return false;
                        
                
                
            }
    
        }
      
    };//end validateData
    
    function uploadData($post, $table, $objCon, $checker = "none"){
        
        $rowsarray = array(); 
        $valuesarray = array();
        
        foreach ($post as $key => $value) {
               
            $rowsarray[] = $key;
            
            $valuesarray[] = "'".$value."'";
                    
        }
        
        $rows = implode(", ", $rowsarray);
        
        $values = implode(", ", $valuesarray);
        
        
        
        /*
         
         checker data 
         
        */
        
        if($checker=="true"){
            
            return $sql = "INSERT INTO $table ($rows)
            VALUES($values)";
            
            
            
        }
        
        
        
        /*
         
         checker data end
         
        */
        
        
        
        
        $sql = "INSERT INTO $table ($rows)
        VALUES($values)";
        $res = $objCon->query($sql);
        
        return $res;

    };//end uploadData
    
    function updateData($post, $chekval, $checkrow, $table, $objCon, $checker = "none"){
        
        $newarray = array();
        
        foreach ($post as $key => $value) {
               
            $newarray[] = "$key = '$value'";
                    
        }
        
        $newstring = implode(", ", $newarray);
        
        
        
        /*
         
         checker data 
         
        */
        
        if($checker=="true"){
            
            return $sql = "UPDATE $table SET $newstring WHERE $checkrow = '$chekval'";
            
            
            
        }
        
        
        
        /*
         
         checker data end
         
        */
        
        
        
        
        $sql = "UPDATE $table SET $newstring WHERE $checkrow = '$chekval'";

        $res = $objCon->query($sql);
        
        return $res;

    };//end updateData
    
    function ifExist($input, $table, $rowfunc,  $objCon){
        
        $sql = "select $rowfunc FROM $table";

        $res = $objCon->query($sql);

        while($row=$res->fetch_array()) {
            
            if($input==$row["$rowfunc"]){
                
                return true;
                
            } else{
                
                //do nothing
            
            }
            
        }
        
    }//end ifExist
    
    function imageUpload($uploaded_file, $placement){
        
        $allowedExts = array("gif", "jpeg", "jpg", "png");
        $temp = explode(".", $uploaded_file["name"]);
        $extension = end($temp);
        if ((($uploaded_file["type"] == "image/gif")
        || ($uploaded_file["type"] == "image/jpeg")
        || ($uploaded_file["type"] == "image/jpg")
        || ($uploaded_file["type"] == "image/pjpeg")
        || ($uploaded_file["type"] == "image/x-png")
        || ($uploaded_file["type"] == "image/png"))
        && ($uploaded_file["size"] < 10000000)
        && in_array($extension, $allowedExts))
          {
          if ($uploaded_file["error"] > 0)
            {
            return "Invalid file size";
            }
          else
            {
              
              $x = 1;
              
              while($x<=2){
              
              $newname = md5(uniqid(rand(), true)).".".$extension;
              
              if(file_exists($placement . $newname)){
                  
                  //do nothing
                  
              }else{
                  $x=3;
              }
              
              
              }
          
              if(move_uploaded_file($uploaded_file['tmp_name'], $placement.$newname)){
              return $newname;
              } else {
                  
                  echo "invalid file path";
                  
              }
             
            }
          }
        else
          {
          print_r($uploaded_file);
          print_r($temp);
          }
        
    }//end imageUpload
    
    function deleteFile($placement, $filename){
        
        if(file_exists($placement . $filename)){
                  
            unlink ($placement . $filename);
            
            return true;
                  
        }else{
                  
            return false;
                  
        };
        
    }//end deleteFile

    //Tager nyhederne og laver "regnestykket"
    function pageination($table, $results, $sqlOrder, $sqlWhere, $objCon){
        
        $sql = "SELECT COUNT(*) as count FROM " . $table;
        
        $res = $objCon->query($sql);
        
        $row = $res->fetch_object();
        
        $count = $row->count;
        
        $result_per_page = $results;
        
        $total_pages = ceil($count/$result_per_page);
        
        if(isset($_GET['page'])) {
            
            $current_page = filter_var($_GET['page'], FILTER_VALIDATE_INT);   
            
        }else {
            
            $current_page = 1;
            
        }
        
        if($current_page > $total_pages) {
            
            $current_page = $total_pages;   
            
        }
        
        if($current_page < 1) {
            
            $current_page = 1;   
            
        }
        
        $offset = ($current_page-1) * $result_per_page;
        
        echo $sql = "SELECT * FROM " . $table . " " . $sqlWhere . " ORDER by " . $sqlOrder . " DESC LIMIT " . $offset . "," . $result_per_page;
        
        $res = $objCon->query($sql);

        return $res;
        
    }//end pageination

    //Laver pageination i bunden
    function getTotalPages($table, $results, $objCon){
     
        $sql = "SELECT COUNT(*) as count FROM " . $table;
        
        $res = $objCon->query($sql);
        
        $row = $res->fetch_object();
        
        $count = $row->count;
        
        $result_per_page = $results;
        
        $total_pages = ceil($count/$result_per_page);
        
        if(isset($_GET['page'])) {
            
            $current_page = filter_var($_GET['page'], FILTER_VALIDATE_INT);   
            
        }else {
            
            $current_page = 1;
            
        }
        
        if($current_page > $total_pages) {
            
            $current_page = $total_pages;   
            
        }
        
        if($current_page < 1) {
            
            $current_page = 1;   
            
        }
        
        $style = "";
        
        echo "<span id='pageination'>";
        for($x=1; $x<=$total_pages; $x++) {
            
            if($current_page == $x){
                
                $style = "style='font-weight: bold;'";   
                
            }
            echo "<a class='pageination' " . $style . " href='?page=" . $x."'>" . $x . "</a>";
            $style = " ";
            
        }
        echo "</span>";
        
        return $total_pages;
        
    }//end getTotalPages
    
    function getMenu($table, $parent = 0)
    {
        global $objCon;
        
        // Hent alle emner under den aktuelle 'parent', vi atarter med 0...
        $sql = "SELECT * FROM $table WHERE parent_id = $parent";
        $objectResult = $objCon->query($sql);
        
        // Hvis der ingen emner er, forlades funktionen...
        if ($objectResult->num_rows === 0) {
            
            return "Please create a menu";
            
        }

        // $output variablen skal 'overleve' et ukendt antal funktionskald, sÃ¥ den gÃ¸res static
        static $output;

        // Der startes en ny liste
        $output .= "<ul>\n";
        
        while ($obj = $objectResult->fetch_object()) {
            
            $file = $obj->filename . $obj->extension;
            
            if(file_exists("$file")) {
                
                 $url = "$file";
                
            }else if(file_exists("pages/$file")) {
                
                $url = "pages/$file";
                
            }else if ($obj->path = "pages/") {
                
                $url = "../$file";
                
            }
            
            /*
            <script>
        
                //Sets active page
                var active = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
                $('#topBar ul li a').each(function(index, element) {
                    var page = $(this).attr('href');
                    if(page == active){
                        $(this).addClass('active');
                    }
                });

            </script>
            */

            
            $output .= "<li><a href='$url'>" . $obj->name . "</a>\n";
            $parent = $obj->id;
            // Rekursion!! Funktionen kalder sig selv for at se om der er underemner
            
            getMenu($table, $parent);
            $output .= "</li\n>";
            
        }
        
        $output .= "</ul>\n";
        return $output;
        
    }//end getMenu

    function loadFiles($pathto){
        
        $dirarray = array();
        $filearray = array();
        
        $fil = new SplFileObject(__FILE__); 
        $path = $fil->getPath();
        $finalPath = substr($path, 0, -4);
        $finalPath = $finalPath.$pathto;

        $mappeiterator = new FilesystemIterator($finalPath);

        foreach ($mappeiterator as $fileinfo) {


             if($fileinfo->isDir() == true) {

                 
                $dirarray[] = $fileinfo->getFilename()."/";

            }else {

                $filearray[] = $fileinfo->getFilename();

             }     


        }
        
        $collected = array($dirarray, $filearray);
        
        return $collected;
        
    }//end loadFiles

   ?>