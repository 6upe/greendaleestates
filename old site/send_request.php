<?php
include 'php/db_connection.php';

if(isset($_POST['send-request'])){

   

    $i = $_POST['id'];
        
  $estateFor = $getId[$i]['estate_for'] == 'rent' ? 'rent' : 'buy';

  $text = 'Hi, my name is ' . $_POST['r_name'] .  ' Phone:  ' . $_POST['r_phone'] . ' Email: ' .  $_POST['r_email']  . ' I want to ' . $estateFor . ' ' . $getId[$i]['property_name']. ' Price: '. $getId[$i]['price'] . '  Located :' . $getId[$i]['location'] . ' Decription: ' . $getId[$i]['property_desc'] ;
 
//   Header('Location: latest_updates.php');
  Header('Location: https://wa.me/0760074258?text='. $text);
//    
}
?>