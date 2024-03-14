<?php
    
  if(isset($_GET['status'])){
     $status = $_GET['status'];
     if($status == 1){
        echo "Thank you for your message";
     }else if($status == 0){
        echo "Unable to send message";
     }
 }
 ?>
