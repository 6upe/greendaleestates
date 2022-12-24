<?php

    $con = new PDO("sqlite:greendale_db.db");

    if($con){
        echo 'Database Connected';
    }

    $getId = $con->prepare("select * from property");
    $getId->execute();
    $getId = $getId->fetchAll(PDO::FETCH_ASSOC);

    // $getMedia = $con->prepare("select * from property_media where property_id = '$'");
    // $getMedia->execute();
    // $getMedia = $getMedia->fetchAll(PDO::FETCH_ASSOC);
  
//    echo  $getId[0]['property_id'];
    // echo '<pre>';
    // print_r($getId);
    // echo '</pre>';
?>
