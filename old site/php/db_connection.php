<?php

    $con = new PDO("sqlite:greendale_db.db");

    if(!$con){
        echo 'Database Not Connected';
    }

    $getId = $con->prepare("select * from property");
    $getId->execute();
    $getId = $getId->fetchAll(PDO::FETCH_ASSOC);

    // $resetSequenceProperty = $con->prepare("UPDATE SQLITE_SEQUENCE SET SEQ=0 WHERE NAME='property'");
    // $resetSequenceProperty->execute();

    // $resetSequencePropertyMedia = $con->prepare("UPDATE SQLITE_SEQUENCE SET SEQ=0 WHERE NAME='property_media'");
    // $resetSequencePropertyMedia->execute();

    function recursiveRemove($dir) {
        $structure = glob(rtrim($dir, "/").'/*');
        if (is_array($structure)) {
            foreach($structure as $file) {
                if (is_dir($file)) recursiveRemove($file);
                elseif (is_file($file)) unlink($file);
            }
        }
        rmdir($dir);
    }

    


    // $getMedia = $con->prepare("select * from property_media where property_id = '$'");
    // $getMedia->execute();
    // $getMedia = $getMedia->fetchAll(PDO::FETCH_ASSOC);
  
//    echo  $getId[0]['property_id'];
    // echo '<pre>';
    // print_r($getId);
    // echo '</pre>';

    //DELETE PROPERTY

    // for($i = 0; $i < count($getId); $i++){
    //     if(){
            
    //     } 
    // }
       
        
?>
