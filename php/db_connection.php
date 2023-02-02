<?php
    
    $con = new PDO("sqlite:greendale_db.db");

    if(!$con){
        echo 'Database Not Connected';
    }

    $getId = $con->prepare("select * from property");
    $getId->execute();
    $getId = $getId->fetchAll(PDO::FETCH_ASSOC);

    function refreshPage(){

        header('Refresh:0');
    }



    // $resetSequencePropertyMedia = $con->prepare("UPDATE SQLITE_SEQUENCE SET SEQ=0 WHERE NAME='property_media'");
    // $resetSequencePropertyMedia->execute();



    // function recursiveRemove($dir) {
    //     $structure = glob(rtrim($dir, "/").'/*');
    //     if (is_array($structure)) {
    //         foreach($structure as $file) {
    //             if (is_dir($file)) recursiveRemove($file);
    //             elseif (is_file($file)) unlink($file);
    //         }
    //     }
    //     rmdir($dir);
    // }

    // function updateDB($did, $total){
    //     while($did <= $total){
    //         $newDid = $did + 1;

    //         $updatePropertyQuery = $con->prepare("update property set property_id = '$did ' where property_id = '$newDid'");
    //         $updatePropertyQuery->execute();

    //         $updatePropertyMediaQuery = $con->prepare("update property_media set property_id = '$did ' where property_id = '$newDid'");
    //         $updatePropertyMediaQuery->execute();

    //         $did = $newDid;

    //     }
        
    // }

    


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



    $total = count($getId);
    $resetSequenceProperty = $con->prepare("UPDATE SQLITE_SEQUENCE SET SEQ='$total' WHERE NAME='property'");
    $resetSequenceProperty->execute(); 

    // refreshPage();
    // sleep(1800);
?>
